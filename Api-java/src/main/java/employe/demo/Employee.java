package employe.demo;

import javax.persistence.*;
import java.util.Date;

@Entity
public class Employee {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id")
	private long id;

	@Column(name = "first_name")
	private String firstName;

	@Column(name = "middle_name")
	private String middleName;

	@Column(name = "last_name")
	private String lastName;

	@Column(name = "gender")
	private String gender;

	@Column(name = "birth_date")
	private Date birthDate;

	@Column(name = "address")
	private String address;

	@Column(name = "district")
	private String district;

	@Column(name = "state")
	private String state;

	@Column(name = "pincode")
	private int pincode;

	@Column(name = "job_title")
	private String jobTitle;

	@Column(name = "department")
	private String department;

	@Column(name = "commence_date")
	private Date commenceDate;

	@Column(name = "job_status")
	private String jobStatus;

	@Column(name = "bank_name")
	private String bankName;

	@Column(name = "bank_branch")
	private String bankBranch;

	@Column(name = "acc_no")
	private int accNo;

	@Column(name = "isalive")
	private boolean isAlive;

	public Employee() {
		super();
	}

	public Employee(String s) {
		super();
		this.firstName = s;
	}

	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}

	public boolean getisAlive() {
		return isAlive;
	}

	public void setisAlive(boolean isalive) {
		this.isAlive = isalive;
	}

	public String getFirstName() {
		return firstName;
	}

	public void setFirstName(String name) {
		this.firstName = name;
	}

	public String getLastName() {
		return lastName;
	}

	public void setLastName(String name) {
		this.lastName = name;
	}

	public String getMiddleName() {
		return middleName;
	}

	public void setMiddleName(String name) {
		this.middleName = name;
	}

	public String getGender() {
		return gender;
	}

	public void setGender(String name) {
		this.gender = name;
	}

	public Date getBirthDate() {
		return birthDate;
	}

	public void setBirthDate(Date date) {
		this.birthDate = date;
	}

	public String getAddress() {
		return address;
	}

	public void setAddress(String address) {
		this.address = address;
	}

	public String getDistrict() {
		return district;
	}

	public void setDistrict(String district) {
		this.district = district;
	}

	public String getState() {
		return state;
	}

	public void setState(String state) {
		this.state = state;
	}

	public int getPincode() {
		return pincode;
	}

	public void setPincode(int pincode) {
		this.pincode = pincode;
	}

	public String getJobTitle() {
		return jobTitle;
	}

	public void setJobTitle(String jobtitle) {
		this.jobTitle = jobtitle;
	}

	public String getDepartment() {
		return department;
	}

	public void setDepartment(String department) {
		this.department = department;
	}

	public Date getCommenceDate() {
		return commenceDate;
	}

	public void setCommenceDate(Date commenceDate) {
		this.commenceDate = commenceDate;
	}

	public String getJobStatus() {
		return jobStatus;
	}

	public void setJobStatus(String jobstatus) {
		this.jobStatus = jobstatus;
	}

	public String getBankName() {
		return bankName;
	}

	public void setBankName(String bankname) {
		this.bankName = bankname;
	}

	public String getBankBranch() {
		return bankBranch;
	}

	public void setBankBranch(String bankbranch) {
		this.bankBranch = bankbranch;
	}

	public int getAccno() {
		return accNo;
	}

	public void setAccNo(int accno) {
		this.accNo = accno;
	}

}
