package employe.demo;

import antlr.StringUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.util.Calendar;
import java.util.Date;
import java.util.List;

@Service
public class NewsService {

	@Autowired NewsRepository newsRepository;
	@Autowired AwardRepository awardRepository;
	public boolean addNews(News news){
		long millis=System.currentTimeMillis();
		java.sql.Date date=new java.sql.Date(millis);
		news.setDate(date);
		if(news.getHeading()==null||news.getHeading().isEmpty())
			return true;
		newsRepository.save(news);
		return true;
	}

	public List<News> getNewsofMonth(){

		List<News> newsList=newsRepository.findByMonth();

		return newsList;
	}

	public News getNewsById(Long id){
		News news=newsRepository.findById(id).get();
		return news;
	}

	public String setAward (Award award){
		Date date=award.getDate();
		Calendar cal = Calendar.getInstance();
		cal.setTime(date);
		int month = cal.get(Calendar.MONTH);
		int year=cal.get(Calendar.YEAR);
		award.setMonth(month);
		award.setYear(year);
		awardRepository.save(award);
		return "true";
	}

	public Award getAward(){
		 Calendar calendar = Calendar.getInstance();
		 int month= calendar.get(Calendar.MONTH);
		 int year= calendar.get(Calendar.YEAR);
		Award award=awardRepository.findByMonthAndYear(month,year);
		return award;
	}

}
