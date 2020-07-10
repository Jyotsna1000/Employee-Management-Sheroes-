package employe.demo;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import java.time.LocalDate;
import java.util.Date;

@Entity
public class Event {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id")
	private long id;

	@Column(name = "no_of_attendes")
	private int noOfAttendees;

	@Column(name = "organizer_name")
	private String organizerName;

	@Column(name = "type_event")
	private String typeOfEvent;

	@Column(name = "event_date")
	private LocalDate eventDate;

	@Column(name = "event_name")
	private String eventName;

	@Column(name = "description")
	private String description;

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

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}
}

