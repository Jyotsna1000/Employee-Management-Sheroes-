package employe.demo;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import java.util.Date;

@Entity
public class Complaint {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id")
	private long id;

	@Column(name = "first_name")
	private String firstName;

	@Column(name = "last_name")
	private String lastName;

	@Column(name = "name")
	private String name;

	@Column(name = "emailId")
	private String emailId;

	@Column(name = "phone")
	private String phone;

	@Column(name = "type_of_complaint")
	private String typeOfComplaint;

	@Column(name = "description")
	private String description;

	@Column(name = "date")
	private Date date;

	@Column(name ="is_active")
	private boolean isActive;

	public void setId(Long id){
		this.id=id;
	}
	public long getId(){
		return this.id;
	}

	public void setFirstName(String firstName){
		this.firstName=firstName;
	}
	public String getFirstName(){
		return this.firstName;
	}
	public  void setLastName(String lastName){
		this.lastName=lastName;
	}
	public String getLastName(){
		return  this.lastName;
	}
	public  void setName(String name){
		this.name=name;
	}
	public String getName(){
		return  this.name;
	}
	public void setEmailId(String emailId){
		this.emailId=emailId;
	}
	public String getEmailId(){
		return this.emailId;
	}
	public void setPhone(String phone){
		this.phone=phone;
	}
	public String getPhone(){
		return this.phone;
	}
	public void setTypeOfComplaint(String typeOfComplaint){
		this.typeOfComplaint=typeOfComplaint;
	}
	public String getTypeOfComplaint(){
		return this.typeOfComplaint;
	}
	public void setDescription(String description){
		this.description=description;
	}
	public String getDescription(){
		return this.description;
	}
	public void setDate(Date date){
		this.date=date;
	}
	public Date getDate(){
		return date;
	}
	public void setIsActive(boolean isActive){
		this.isActive=isActive;
	}
	public boolean getIsActive(){
		return this.isActive;
	}

}
