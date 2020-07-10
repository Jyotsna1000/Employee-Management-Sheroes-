package employe.demo;

import com.google.api.client.googleapis.auth.oauth2.GoogleIdToken;
import com.google.api.client.json.JsonFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.io.IOException;
import java.util.Properties;
import java.util.Random;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;





@Service
public class LoginService  {

	@Autowired
	private LoginRepository loginRepository;

	@Autowired
	private EmpRepository empRepository;


	public boolean validateLogin(String clientId,String token)throws IOException {

		JsonFactory jsonFactory=null;
		GoogleIdToken idToken = GoogleIdToken.parse(jsonFactory,token);
		if (idToken != null) {
			GoogleIdToken.Payload payload = idToken.getPayload();

			// Print user identifier
			String userId = payload.getSubject();
			System.out.println("User ID: " + userId);

			// Get profile information from payload
			String email = payload.getEmail();

			boolean emailVerified = Boolean.valueOf(payload.getEmailVerified());
			String name = (String) payload.get("name");
			String pictureUrl = (String) payload.get("picture");
			String locale = (String) payload.get("locale");
			String familyName = (String) payload.get("family_name");
			String givenName = (String) payload.get("given_name");


		} else {
			return false;
		}
		return true;
	}

	public Login normalLogin(Login login){
		Login result=loginRepository.validlogin(login.getEmail(),login.getPassword());

		if(result!=null)
			return result;
		else return null;
	}

	public String addLoginDetail(Login login){

		boolean flag=empRepository.findById(login.getEmpId()).isPresent();


		if(flag){
			String passwordToHash = login.getPassword();
			String generatedPassword = null;
			try {
				// Create MessageDigest instance for MD5
				MessageDigest md = MessageDigest.getInstance("MD5");
				//Add password bytes to digest
				md.update(passwordToHash.getBytes());
				//Get the hash's bytes
				byte[] bytes = md.digest();
				//This bytes[] has bytes in decimal format;
				//Convert it to hexadecimal format
				StringBuilder sb = new StringBuilder();
				for (int i = 0; i < bytes.length; i++) {
					sb.append(Integer.toString((bytes[i] & 0xff) + 0x100, 16).substring(1));
				}
				//Get complete hashed password in hex format
				generatedPassword = sb.toString();
			   }
				catch (NoSuchAlgorithmException e)
				{
					e.printStackTrace();
				}

				loginRepository.saveCustom(login.getEmail(),generatedPassword,login.getName(),login.getEmpId());
			return "true";
		}
		else return "false";
	}

	public String giveAccess(Login login){
		Login login1=loginRepository.findByEmpIdAndEmail(login.getEmpId(),login.getEmail());
		if(login1!=null)
		{
			loginRepository.setUserType(login.getEmail());
			return "true";
		}
		else return "false";

	}
	public Integer sendMail(Login login) {

		final String username = "jyotsnasharma1000@gmail.com";
		final String password = "lqfrfkapyggtmrun";

		Properties props = new Properties();
		props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.starttls.enable", "true");
		props.put("mail.smtp.host", "smtp.gmail.com");
		props.put("mail.smtp.port", "587");

		Session session = Session.getInstance(props,
				new javax.mail.Authenticator() {
					protected PasswordAuthentication getPasswordAuthentication() {
						return new PasswordAuthentication(username, password);
					}
				});

		try {

			Random rand = new Random();

			// Generate random integers in range 0 to 999
			int otp = rand.nextInt(1000);
			Message message = new MimeMessage(session);
			message.setFrom(new InternetAddress("fromSomeone@gmail.com"));
			message.setRecipients(Message.RecipientType.TO,
					InternetAddress.parse(login.getEmail()));
			message.setSubject("Re-set the password");
			message.setText("Dear user,"
					+ "\n\n This is the verification code to reset the password of your account is:\n\n"+otp);

			Transport.send(message);

			System.out.println("Done");
			return otp;

		} catch (MessagingException e) {
			throw new RuntimeException(e);


	}

	public boolean changePassword(Login login){
		Login login1=loginRepository.findByEmail(login.getEmail());
		if(login1!=null){
			String passwordToHash = login.getPassword();
			String generatedPassword = null;
			try {
				// Create MessageDigest instance for MD5
				MessageDigest md = MessageDigest.getInstance("MD5");
				//Add password bytes to digest
				md.update(passwordToHash.getBytes());
				//Get the hash's bytes
				byte[] bytes = md.digest();
				//This bytes[] has bytes in decimal format;
				//Convert it to hexadecimal format
				StringBuilder sb = new StringBuilder();
				for (int i = 0; i < bytes.length; i++) {
					sb.append(Integer.toString((bytes[i] & 0xff) + 0x100, 16).substring(1));
				}
				//Get complete hashed password in hex format
				generatedPassword = sb.toString();
			}
			catch (NoSuchAlgorithmException e)
			{
				e.printStackTrace();
			}
			loginRepository.setpassword(login.getEmail(),generatedPassword);
			return true;
		}
		return false;
	}
}
