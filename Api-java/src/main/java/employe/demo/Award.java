package employe.demo;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import java.util.Date;

@Entity
public class Award {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id")
	private long id;

	@Column(name = "date_month")
	private int month;

	@Column(name = "date_year")
	private int year;

	@Column(name = "emp_month")
	private String empMonth;

	@Column(name = "pat_on_bag")
	private String patOnBag;

	@Column(name = "customer_choice")
	private String customerChoice;

	@Column(name = "innovation")
	private String innovation;

	@Column(name = "excellence")
	private String excellence;

	@Column(name = "date")
	private Date date;

	public void setId(long id) {
		this.id = id;
	}

	public long getId() {
		return id;
	}

	public void setMonth(int month) {
		this.month = month;
	}

	public int getMonth() {
		return month;
	}

	public void setEmpMonth(String empMonth) {
		this.empMonth = empMonth;
	}

	public String getEmpMonth() {
		return empMonth;
	}

	public void setCustomerChoice(String customerChoice) {
		this.customerChoice = customerChoice;
	}

	public String getCustomerChoice() {
		return customerChoice;
	}

	public void setExcellence(String excellence) {
		this.excellence = excellence;
	}

	public String getExcellence() {
		return excellence;
	}

	public String getInnovation() {
		return innovation;
	}

	public void setInnovation(String innovation) {
		this.innovation = innovation;
	}

	public String getPatOnBag() {
		return patOnBag;
	}

	public void setPatOnBag(String patOnBag) {
		this.patOnBag = patOnBag;
	}

	public Date getDate() {
		return date;
	}

	public void setDate(Date date) {
		this.date = date;
	}

	public int getYear() {
		return year;
	}

	public void setYear(int year) {
		this.year = year;
	}
}
