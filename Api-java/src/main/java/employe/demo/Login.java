package employe.demo;

import com.sun.xml.internal.ws.developer.UsesJAXBContext;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
public class Login {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name="id")
	private long id;

	@Column(name = "email")
	private String email;

	@Column(name = "password")
	private String password;

	@Column(name = "is_active")
	private boolean isActive;

	@Column(name= "name")
	private String name;

	@Column(name = "user_type")
	private String userType;

	@Column(name= "emp_id")
	private long empId;



	public long getId(){
		return id;
	}
	public void setId(long id){
		this.id=id;
	}
	public String getEmail(){
		return email;
	}
	public void setEmail(String email){
		this.email=email;
	}
	public  String getPassword(){
		return password;
	}
	public void setPassword(String password){
		this.password=password;
	}

	public boolean getIsActive(){
		return isActive;
	}

	public void setIsActive(boolean isActive) {
		this.isActive = isActive;
	}

	public String getName(){
		return name;
	}
	public void setName(String name){
		this.name=name;
	}
	public String getUserType(){
		return userType;
	}
	public void setUserType(String userType){
		this.userType=userType;
	}
	public void setEmpId(long empId){
		this.empId=empId;
	}
	public long getEmpId(){
		return empId;
	}
}
