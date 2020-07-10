package employe.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
import java.util.stream.Collectors;

@Service
public class ComplaintService {
	@Autowired
	private ComplaintRepository complaintRepository;

	public boolean addComplaint(ComplaintRequest complaintRequest){
		Complaint complaint=new Complaint();

		complaint.setFirstName(complaintRequest.getFirstName());
		complaint.setLastName(complaintRequest.getLastName());
		String name=complaintRequest.getFirstName()+" "+complaintRequest.getLastName();
		complaint.setName(name);
		complaint.setEmailId(complaintRequest.getEmailId());
		complaint.setPhone(complaintRequest.getPhone());
		complaint.setTypeOfComplaint(complaintRequest.getTypeOfComplaint());
		complaint.setDate(complaintRequest.getDate());
		complaint.setDescription(complaintRequest.getDescription());
		complaint.setIsActive(true);
		complaintRepository.save(complaint);
		return true;
	}

	public List<Complaint> getActiveComplaints() {
		List<Complaint> complaintList = new ArrayList<>();
		complaintRepository.findAll().forEach(complaintList::add);
		complaintList.removeIf(complaint -> (!complaint.getIsActive()));
		return complaintList;
	}

	public void deleteComplaint(Long id) {
			Complaint complaint = complaintRepository.findById(id).get();
			complaint.setIsActive(false);
			complaintRepository.save(complaint);
	}

	public ComplaintResponse getComplaintById(Long id){
		Complaint complaint = complaintRepository.findById(id).get();
		ComplaintResponse complaintResponse= new ComplaintResponse();
		complaintResponse.setId(complaint.getId());
		complaintResponse.setDate(complaint.getDate());
		complaintResponse.setDescription(complaint.getDescription());
		complaintResponse.setEmailId(complaint.getEmailId());
		complaintResponse.setFirstName(complaint.getFirstName());
		complaintResponse.setLastName(complaint.getLastName());
		complaintResponse.setName(complaint.getName());
		complaintResponse.setPhone(complaint.getPhone());
		complaintResponse.setTypeOfComplaint(complaint.getTypeOfComplaint());
		complaintResponse.setIsActive(complaint.getIsActive());

		return complaintResponse;
	}

	public List<Chart> getComplaintByYear(Integer year) {
		List<Chart> chart = new ArrayList<>();
		List<Complaint> complaints=new ArrayList<>();
		complaints=complaintRepository.findByYear(year);
		for (int count = 0; count <=11; count++) {
			List<Complaint> complaintList=new ArrayList<>();
			Chart<Integer> object = new Chart<Integer>();
			int count_copy=count;
			complaints.stream()
					.filter((i) -> {
						Calendar cal = Calendar.getInstance();
						cal.setTime(i.getDate());
						int month= cal.get(Calendar.MONTH);
						return (month==count_copy);
					})
					.forEachOrdered(complaintList::add);
			object.setlabel(complaintList.size()); //here label is total complaint.
			complaintList.removeIf(complaintlist -> (!complaintlist.getIsActive()));
			object.sety(complaintList.size());  //here y is solved compalints.
			chart.add(object);
		}
		return chart;
	}

}
