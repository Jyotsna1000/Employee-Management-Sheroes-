package employe.demo;

import com.sun.xml.bind.v2.model.core.ID;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.sql.Timestamp;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.concurrent.ConcurrentMap;

@Service
public class EventService {

	@Autowired
	private EventRepository eventRepository;

	public boolean addEvent(EventRequest eventRequest){
		Event event=new Event();

		event.setEventDate(eventRequest.getEventDate());
		event.setEventName(eventRequest.getEventName());
		event.setNoOfAttendees(eventRequest.getNoOfAttendees());
		event.setOrganizerName(eventRequest.getOrganizerName());
		event.setTypeOfEvent(eventRequest.getTypeOfEvent());
		event.setDescription(eventRequest.getDescription());
		eventRepository.save(event);
		if(event==null)
			return false;

		return true;

	}

	public List<EventResponse> getEventDetails(String dateValue){

		List<Event> events=new ArrayList<>();
		String pattern = "yyyy-MM-dd";
		String timestampAsString = dateValue;
		DateTimeFormatter formatter = DateTimeFormatter.ofPattern(pattern);
		LocalDate localDateTime = LocalDate.from(formatter.parse(timestampAsString));

		events=eventRepository.findAllByEventDate(localDateTime);

		List<EventResponse> eventResponseList= new ArrayList<>();

		for (Event event:events) {
			EventResponse eventResponse=new EventResponse();
			eventResponse.setId(event.getId());
			eventResponse.setEventDate(event.getEventDate());
			eventResponse.setEventName(event.getEventName());
			eventResponse.setNoOfAttendees(event.getNoOfAttendees());
			eventResponse.setOrganizerName(event.getOrganizerName());
			eventResponse.setTypeOfEvent(event.getTypeOfEvent());
			eventResponse.setDescription(event.getDescription());
			eventResponseList.add(eventResponse);
		}

		return eventResponseList;
	}

	public List<EventResponse> getEventOfYear(Integer year){
		List<Event> events=new ArrayList<>();
		events=eventRepository.findAllByYear(year);
		List<EventResponse> eventResponseList= new ArrayList<>();
		for (Event event:events) {
			EventResponse eventResponse=new EventResponse();
			eventResponse.setId(event.getId());
			eventResponse.setEventDate(event.getEventDate());
			eventResponse.setEventName(event.getEventName());
			eventResponse.setNoOfAttendees(event.getNoOfAttendees());
			eventResponse.setOrganizerName(event.getOrganizerName());
			eventResponse.setTypeOfEvent(event.getTypeOfEvent());
			eventResponse.setDescription(event.getDescription());
			eventResponseList.add(eventResponse);

		}
		return eventResponseList;
	}

	public Event getEventById(Long id){

		Event event=eventRepository.findByEventId(id);
			return event;
	}


}
