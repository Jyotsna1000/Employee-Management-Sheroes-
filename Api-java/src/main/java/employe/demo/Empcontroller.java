package employe.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
public class Empcontroller {

	@Autowired
	private EmpService empService;

	@RequestMapping("/employees")
	public List<Employee> listofEmployes() {
		return empService.getAllEmployee();
	}

	@RequestMapping(method = RequestMethod.GET, value = "/chart")
	public List<Chart> Chartdetail() {
		return empService.getlast5();

	}

	@RequestMapping(method = RequestMethod.GET, value = "/chartpie")
	public List<Chart> piechart() {
		return empService.empdeptwise();

	}

	@RequestMapping(method = RequestMethod.GET, value = "/employees/{id}/{name}")
	public EmpResponse EmpDetail(@PathVariable("id") Long id, @PathVariable("name") String firstName) {
		return empService.getEmp(id, firstName);

	}

	@RequestMapping(method = RequestMethod.GET, value = "/employees/{id}")
	public EmpResponse EmpDetail(@PathVariable("id") Long id) {
		return empService.getdetails(id);

	}

	@RequestMapping(method = RequestMethod.GET, value = "/search/{name}")
	public List<Employee> SearchDetail(@PathVariable("name") String firstname) {
		return empService.searchlist(firstname);

	}

	@RequestMapping(method = RequestMethod.POST, value = "/employees")
	public ResponseEntity<Object> addEmployee(@RequestBody EmpRequest empRequest) {

		empService.addEmp(empRequest);
		return new ResponseEntity<>("Employee is created successfully", HttpStatus.CREATED);
	}

	@RequestMapping(method = RequestMethod.POST, value = "/employees/{id}")
	public ResponseEntity<Object> editEmployee(@PathVariable("id") Long id, @RequestBody EmpRequest empRequest) {
		empService.editEmp(id, empRequest);
		return new ResponseEntity<>("Employee is updated successfully", HttpStatus.OK);

	}

	@RequestMapping(method = RequestMethod.DELETE, value = "/employees/{id}/{name}")
	public String deleteEmployee(@PathVariable("id") Long id, @PathVariable("name") String firstName) {
		return empService.deleteEmp(id, firstName);

	}
}