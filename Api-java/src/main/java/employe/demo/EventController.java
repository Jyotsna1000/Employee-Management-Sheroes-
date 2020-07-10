package employe.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import java.util.Date;
import java.util.List;

@RestController
public class EventController {

	@Autowired
	private EventService eventService;

	@RequestMapping(method = RequestMethod.POST, value = "/event")
	public boolean addEvent(@RequestBody EventRequest eventRequest) {
		return eventService.addEvent(eventRequest);
	}

	@RequestMapping(method = RequestMethod.GET, value = "/event/{date}")
	public List<EventResponse> getEvent(@PathVariable("date") String date) {
		return eventService.getEventDetails(date);

	}
	@RequestMapping(method = RequestMethod.GET, value = "/eventyear/{year}")
	public List<EventResponse> getEventofYear(@PathVariable("year") Integer year) {
		return eventService.getEventOfYear(year);

	}
	@RequestMapping(method = RequestMethod.GET, value = "/eventsingle/{id}")
	public Event getEventofYear(@PathVariable("id") Long id) {
		return eventService.getEventById(id);

	}

}
