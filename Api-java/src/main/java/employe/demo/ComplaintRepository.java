package employe.demo;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;

import java.util.List;

public interface ComplaintRepository extends CrudRepository<Complaint,Long> {

	@Query(value = "SELECT *  FROM complaint  where year(date)= :year", nativeQuery = true)
	List<Complaint> findByYear(@Param("year") Integer year);
}
