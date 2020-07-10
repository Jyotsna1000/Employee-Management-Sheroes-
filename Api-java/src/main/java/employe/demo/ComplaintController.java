package employe.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
public class ComplaintController {
	@Autowired
	private ComplaintService complaintService;

	@RequestMapping(method = RequestMethod.POST, value = "/complaint")
	public boolean addComplaint(@RequestBody ComplaintRequest complaintRequest) {
		 return complaintService.addComplaint(complaintRequest);
	}

	@RequestMapping(method = RequestMethod.GET, value = "/complaintlist")
	public List<Complaint> getComplaints() {
		return complaintService.getActiveComplaints();
	}

	@RequestMapping(method = RequestMethod.DELETE, value = "/complaint/{id}")
	public void deleteEmployee(@PathVariable("id") Long id) {
		complaintService.deleteComplaint(id);

	}
	@RequestMapping(method = RequestMethod.GET, value = "/complaint/{id}")
	public ComplaintResponse getComplaint(@PathVariable("id") Long id) {
		return complaintService.getComplaintById(id);
	}
	@RequestMapping(method = RequestMethod.GET, value = "/complaintyear/{year}")
	public List<Chart> getComplaintByYear(@PathVariable("year") Integer year) {
		return complaintService.getComplaintByYear(year);
	}

}
