package employe.demo;

import java.util.Date;

public class EmpResponse {

	private long id;

	private String firstName;

	private String middleName;

	private String lastName;

	private String gender;

	private Date birthDate;

	private String address;

	private String district;

	private String state;

	private int pincode;

	private String jobTitle;

	private String department;

	private Date commenceDate;

	private String jobStatus;

	private String bankName;

	private String bankBranch;

	private int accNo;

	private boolean isAlive;

	public boolean getisAlive() {
		return isAlive;
	}

	public void setisAlive(boolean isalive) {
		this.isAlive = isalive;
	}

	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
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
