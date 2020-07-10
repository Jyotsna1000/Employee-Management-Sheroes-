package employe.demo;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import java.util.Date;

@Repository
public interface AwardRepository extends CrudRepository<Award,Long> {


	@Query(value = "select * from award where date_month=?1 and date_year=?2 order by date,id desc limit 1",nativeQuery = true)
	public Award findByMonthAndYear(int month,int year);

}
