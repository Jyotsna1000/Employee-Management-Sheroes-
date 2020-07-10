package employe.demo;
import com.google.api.client.googleapis.auth.oauth2.GoogleIdToken;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import java.io.IOException;

@RestController
public class LoginController {

	@Autowired
	public LoginService loginService;
	@RequestMapping(method = RequestMethod.POST, value="/login/{clientId}/{token}")
	public boolean validLogin(@PathVariable("clientId") String clientId,@PathVariable("token") String token)throws
			IOException {
		return loginService.validateLogin(clientId,token);
	}

	@RequestMapping(method = RequestMethod.POST, value="/login")
	public Login validNormalLogin(@RequestBody Login login){
		return loginService.normalLogin(login);
	}

	@RequestMapping(method = RequestMethod.POST, value="/signup")
	public String addLogin(@RequestBody Login login){
		return loginService.addLoginDetail(login);
	}
	@RequestMapping(method = RequestMethod.POST,value = "/access")
	public String giveAccess(@RequestBody Login login){
		return loginService.giveAccess(login);
	}
	@RequestMapping(method = RequestMethod.POST,value = "/sendmail")
	public Integer sendMail(@RequestBody Login login){
		return loginService.sendMail(login);
	}
	@RequestMapping(method = RequestMethod.POST,value = "/setpwd")
	public boolean changePassword(@RequestBody Login login){
		return loginService.changePassword(login);
	}


}
