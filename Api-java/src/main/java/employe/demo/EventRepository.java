package employe.demo;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;

import java.time.LocalDate;
import java.time.LocalDateTime;
import java.util.Date;
import java.util.List;

public interface EventRepository extends CrudRepository<Event,Long> {

	List<Event> findAllByEventDate(LocalDate date);

	@Query(value = "SELECT *  FROM event where year(event_date)= :year", nativeQuery = true)
	List<Event> findAllByYear(@Param("year") Integer year);

	@Query(value = "select * from event where id=?1",nativeQuery = true)
	Event findByEventId(Long id);


}
