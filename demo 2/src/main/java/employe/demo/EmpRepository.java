package employe.demo;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;

import java.util.List;

public interface EmpRepository extends CrudRepository<Employee,Long>{

    @Query(

            value= "SELECT COUNT(*),department  FROM employee  GROUP BY department",nativeQuery = true)
    List<Object>findEmployeBydepartment();

}
