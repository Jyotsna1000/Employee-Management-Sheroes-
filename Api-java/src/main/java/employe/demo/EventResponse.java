package employe.demo;

import java.time.LocalDate;
import java.util.Date;

public class EventResponse {
	private long id;

	private int noOfAttendees;

	private String organizerName;

	private String typeOfEvent;

	private LocalDate eventDate;

	private String eventName;
	private  String description;

	public void setId(long id){
		this.id=id;
	}
	public long getId(){
		return id;
	}
	public void setNoOfAttendees(int noOfAttendees){
		this.noOfAttendees=noOfAttendees;
	}
	public int getNoOfAttendees(){
		return noOfAttendees;
	}
	public  void  setOrganizerName(String organizerName){
		this.organizerName=organizerName;
	}
	public  String getOrganizerName(){
		return organizerName;
	}
	public void setTypeOfEvent(String typeOfEvent){
		this.typeOfEvent=typeOfEvent;
	}
	public String getTypeOfEvent(){
		return typeOfEvent;
	}
	public void setEventDate(LocalDate eventDate){
		this.eventDate=eventDate;
	}
	public LocalDate getEventDate(){
		return eventDate;
	}
	public void setEventName(String eventName){
		this.eventName=eventName;
	}
	public String getEventName(){
		return eventName;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public String getDescription() {
		return description;
	}
}
