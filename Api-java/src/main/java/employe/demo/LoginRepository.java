package employe.demo;

import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;

import javax.transaction.Transactional;

public interface LoginRepository extends CrudRepository<Login, Long> {

	@Query(
			value = "select * from login where email=?1 and password=MD5(?2) and is_active=true",nativeQuery = true
	)
	public Login validlogin(String email,String password);


	@Modifying
	@Query(value = "insert into login (email,password,is_active,user_type,name,emp_id) values(:email,:password,true,'N',:name,:empid)",nativeQuery = true)
	@Transactional
	public int saveCustom(@Param("email") String email, @Param("password") String password, @Param("name") String name, @Param("empid") long empid);


	@Query(
			value="select * from login where emp_id=?1 and email=?2",nativeQuery = true)
	public Login findByEmpIdAndEmail(Long empId,String email);

	@Modifying
	@Query(value = "update login set user_type='A' where email=?1" ,nativeQuery = true)
	@Transactional
	public int setUserType(String emailId);

	public Login findByEmail(String email);

	@Modifying
	@Query(value = "update login set password= :password where email= :email" ,nativeQuery = true)
	@Transactional
	public int setpassword(@Param("email") String email, @Param("password") String password);


}
