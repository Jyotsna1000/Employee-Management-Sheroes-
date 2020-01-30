package employe.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import java.time.LocalDate;
import java.util.*;


@Service
public class EmpService {

    @Autowired
    private EmpRepository empRepository;

    /**
     *
     * @return List of Chart object
     * This function returns Number of employees in each department.
     */
    public List<Chart> empdeptwise() {
        List<Chart> chart = new ArrayList<>();

        List<Object> result = empRepository.findEmployeBydepartment();
        Iterator itr = result.iterator();

        while (itr.hasNext()) {
            Chart<String> chartObject = new Chart<String>();
            Object[] object = (Object[]) itr.next();
            String label = String.valueOf(object[1]);
            chartObject.setlabel(label);

            Integer numberofEmploye = Integer.parseInt(String.valueOf(object[0]));
            chartObject.sety(numberofEmploye);
            chart.add(chartObject);
        }
        return chart;
    }

    /**
     *
     * @return List of Chart object
     * This function returns the number of employees joined in last 5 years.
     */

        public List<Chart> getlast5() {
        List<Employee> emplist=new ArrayList<>();
        empRepository.findAll()
                .forEach(emplist::add);
        List<Chart> chart=new ArrayList<>();

        LocalDate now=LocalDate.now();
        LocalDate earlier= now.minusYears(5);
        for(int count=0;count<5;count++)
        {
            Chart <Integer>ob=new Chart<Integer>();
            ob.setlabel(earlier.plusYears(count).getYear());
            chart.add(ob);
        }

        Map<Integer,Integer>map=new HashMap<>();
        for(Iterator<Employee> itr=emplist.iterator();itr.hasNext();) {
            Date date =itr.next().getCommenceDate();
            Calendar cal= Calendar.getInstance();
            cal.setTime(date);

            int s = cal.get(Calendar.YEAR);
            if(map.containsKey(s)) {
                int n = map.get(s);
                n++;
                map.replace(s,n);
            }else {map.put(s,1);}
        }

        int chartCount=0;
        while(chartCount<chart.size())
        {
            Chart <Integer>chart1=chart.get(chartCount);

            int x=chart1.getlabel();
            if(map.containsKey(x)) {
                int n = map.get(x);
                chart1.sety(n);
                chart.set(chartCount,chart1);
            }
             chartCount++;
        }
        return chart;
    }
    public List<Employee> searchlist(String name) {
        List<Employee> emplist=new ArrayList<>();
        empRepository.findAll()
                .forEach(emplist::add);

        for(Iterator<Employee> itr=emplist.iterator();itr.hasNext();){
            if(!itr.next().getFirstName().toLowerCase().contains(name.toLowerCase()))
                itr.remove();
        }

        return emplist;
    }


    /**
     *
     * @return List of Employee Object
     *
     * This function returns information of all employee currently working.
     */
    public List<Employee> getAllEmployee() {
        List<Employee> emplist=new ArrayList<>();
        empRepository.findAll()
                .forEach(emplist::add);

        for(Iterator<Employee> itr=emplist.iterator();itr.hasNext();){
            if(itr.next().getisAlive()==false)
                itr.remove();
        }

        return emplist;
    }

    /**
     *
     * @param id
     * @param name
     * @return EmpResponse Object
     *
     * This function searches the employee on name and id.
     */

    public EmpResponse getEmp(Long id,String name)
    {
        boolean flag=empRepository.findById(id).isPresent();
        if(flag)
        {

            Employee employee=empRepository.findById(id).get();
            EmpResponse empResponse= new EmpResponse();
            if(employee.getFirstName().compareToIgnoreCase(name)!=0)
                return null;

            empResponse.setId(employee.getId());
            empResponse.setFirstName(employee.getFirstName());
            empResponse.setAccNo(employee.getAccno());
            empResponse.setAddress(employee.getAddress());
            empResponse.setBankBranch(employee.getBankBranch());
            empResponse.setBankName(employee.getBankName());
            empResponse.setBirthDate(employee.getBirthDate());
            empResponse.setCommenceDate(employee.getCommenceDate());
            empResponse.setDepartment(employee.getDepartment());
            empResponse.setDistrict(employee.getDistrict());
            empResponse.setGender(employee.getGender());
            empResponse.setJobStatus(employee.getJobStatus());
            empResponse.setJobTitle(employee.getJobTitle());
            empResponse.setPincode(employee.getPincode());
            empResponse.setState(employee.getState());
            empResponse.setLastName(employee.getLastName());
            empResponse.setMiddleName(employee.getMiddleName());
            empResponse.setisAlive(employee.getisAlive());

            return empResponse;
        }
        else return null;

    }

    /**
     *
     * @param id
     * @return EmpResponse Object
     *
     * This function returns employee details if present.
     */
    public EmpResponse getdetails(Long id)
    {
        boolean flag=empRepository.findById(id).isPresent();
        if(flag)
        {

            Employee employee=empRepository.findById(id).get();
            EmpResponse empResponse=new EmpResponse();

            empResponse.setId(employee.getId());
            empResponse.setFirstName(employee.getFirstName());
            empResponse.setAccNo(employee.getAccno());
            empResponse.setAddress(employee.getAddress());
            empResponse.setBankBranch(employee.getBankBranch());
            empResponse.setBankName(employee.getBankName());
            empResponse.setBirthDate(employee.getBirthDate());
            empResponse.setCommenceDate(employee.getCommenceDate());
            empResponse.setDepartment(employee.getDepartment());
            empResponse.setDistrict(employee.getDistrict());
            empResponse.setGender(employee.getGender());
            empResponse.setJobStatus(employee.getJobStatus());
            empResponse.setJobTitle(employee.getJobTitle());
            empResponse.setPincode(employee.getPincode());
            empResponse.setState(employee.getState());
            empResponse.setLastName(employee.getLastName());
            empResponse.setMiddleName(employee.getMiddleName());
            empResponse.setisAlive(employee.getisAlive());

            return empResponse;
        }
        else return null;

    }

    /**
     *
     * @param empRequest
     *
     * This function add new employee in database.
     */
    public void addEmp(EmpRequest empRequest)
    {
        String name=empRequest.getFirstName();
        Employee employee=new Employee(name);
        employee.setMiddleName(empRequest.getMiddleName());
        employee.setLastName(empRequest.getLastName());
        employee.setAccNo(empRequest.getAccno());
        employee.setAddress(empRequest.getAddress());
        employee.setBankBranch(empRequest.getBankBranch());
        employee.setBankName(empRequest.getBankName());
        employee.setBirthDate(empRequest.getBirthDate());
        employee.setCommenceDate(empRequest.getCommenceDate());
        employee.setDepartment(empRequest.getDepartment());
        employee.setDistrict(empRequest.getDistrict());
        employee.setGender(empRequest.getGender());
        employee.setDistrict(empRequest.getDistrict());
        employee.setJobStatus(empRequest.getJobStatus());
        employee.setJobTitle(empRequest.getJobTitle());
        employee.setPincode(empRequest.getPincode());
        employee.setState(empRequest.getState());
        employee.setisAlive(true);


        empRepository.save(employee);
    }

    /**
     *
     * @param id
     * @param empRequest
     * This funcion checks if the employee is present or not,if yes then update.
     */
    public void editEmp(Long id,EmpRequest empRequest)
    {
        Employee employee=empRepository.findById(id).get();
        employee.setFirstName(empRequest.getFirstName());
        employee.setMiddleName(empRequest.getMiddleName());
        employee.setLastName(empRequest.getLastName());
        employee.setAccNo(empRequest.getAccno());
        employee.setAddress(empRequest.getAddress());
        employee.setBankBranch(empRequest.getBankBranch());
        employee.setBankName(empRequest.getBankName());
        employee.setBirthDate(empRequest.getBirthDate());
        employee.setCommenceDate(empRequest.getCommenceDate());
        employee.setDepartment(empRequest.getDepartment());
        employee.setDistrict(empRequest.getDistrict());
        employee.setGender(empRequest.getGender());
        employee.setDistrict(empRequest.getDistrict());
        employee.setJobStatus(empRequest.getJobStatus());
        employee.setJobTitle(empRequest.getJobTitle());
        employee.setPincode(empRequest.getPincode());
        employee.setState(empRequest.getState());

        empRepository.save(employee);
    }

    /**
     *
     * @param id
     * @param name
     * @return string
     *
     * This function set the isAlive attribute to 0 i.e employee is no long working.
     */
    public String deleteEmp(Long id,String name)
    {
       boolean flag= empRepository.findById(id).isPresent();

        if(flag)
        {

            Employee employee=empRepository.findById(id).get();
            if(employee.getFirstName().compareToIgnoreCase(name)!=0)
                return ("Employee name and Id doesn't match");
            employee.setisAlive(false);
            empRepository.save(employee);
            return ("Employee successfully deleted");
        }
        else return ("Employee with this ID doesn't exist.");
    }
}
