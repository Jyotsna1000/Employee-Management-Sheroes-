package employe.demo;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;

import java.util.List;

public interface EmpRepository extends CrudRepository<Employee, Long> {

	@Query(

			value = "SELECT COUNT(*),department  FROM employee  GROUP BY department", nativeQuery = true)
	List<Object> findEmployeBydepartment();

	@Query(value = "SELECT COUNT(*),year(commence_date)  FROM employee \n" + "where year(commence_date)= :yearDate\n"
			+ "GROUP BY year(commence_date) ", nativeQuery = true)
	Long findEmployesLeft(@Param("yearDate") Integer yearDate);

}
