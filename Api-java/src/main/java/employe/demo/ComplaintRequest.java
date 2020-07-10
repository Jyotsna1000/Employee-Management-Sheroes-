package employe.demo;

import java.util.Date;

public class ComplaintRequest {
	private long id;

	private String firstName;

	private String lastName;

	private String name;

	private String emailId;

	private String phone;

	private String typeOfComplaint;

	private String description;

	private Date date;

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
	public String getame(){
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
