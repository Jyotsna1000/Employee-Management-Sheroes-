package employe.demo;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.ForeignKey;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import java.util.Date;

@Entity
public class News {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name="id")
	private long id;

	@Column(name = "heading")
	private String heading;

	@Column(name = "author_name")
	private String authorName;

	@Column(name = "image_url")
	private String imageUrl;

	@Column(name = "date")
	private Date date;

	@Column(name = "description")
	private String description;

	public void setId(long id){
		this.id=id;
	}
	public long getId(){
		return id;
	}
	public void setHeading(String heading){
		this.heading=heading;
	}
	public String getHeading(){
		return heading;
	}
	public void setAuthorName(String authorName){
		this.authorName=authorName;
	}

	public void setDate(Date date){
		this.date=date;
	}
	public Date getDate(){
		return date;
	}

	public String getAuthorName(){
		return authorName;
	}
	public void setImageUrl(String imageUrl){
		this.imageUrl=imageUrl;
	}
	public String getImageUrl(){
		return imageUrl;
	}
	public void setDescription(String description){
		this.description=description;
	}
	public String getDescription(){
		return description;
	}



}
