package employe.demo;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;

import java.util.List;

public interface NewsRepository extends CrudRepository<News, Long> {

	@Query(
			value = "select * from news where date>=DATE_ADD(CURDATE(), INTERVAL -10 DAY) order by date desc",nativeQuery = true
	)
	public List<News>findByMonth();

}
