package employe.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
public class NewsController {

	@Autowired NewsService newsService;
	@RequestMapping(method = RequestMethod.POST, value="/news")
	public boolean addNews(@RequestBody News news){
		return newsService.addNews(news);
	}

	@RequestMapping(method = RequestMethod.GET, value = "/getnews")
	public List<News> getNews(){
		return newsService.getNewsofMonth();
	}

	@RequestMapping(method = RequestMethod.GET, value = "/news/{id}")
	public News getNews(@PathVariable("id") Long id){
		return newsService.getNewsById(id);
	}

	@RequestMapping(method = RequestMethod.POST, value = "/award")
	public String addAward(@RequestBody Award award){
		return newsService.setAward(award);
	}

	@RequestMapping(method = RequestMethod.GET, value = "/award")
	public Award addAward(){
		return newsService.getAward();
	}




}
