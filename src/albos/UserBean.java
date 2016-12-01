package albos;

import java.sql.ResultSet;
import java.sql.SQLException;

public class UserBean {
	
	private String user_id;
	private String user_name;
	private String password;
	private String credit_card_number;
	private String mail_address;
	
	UserBean(ResultSet rs){
		
		
		try {
			user_id = rs.getString(1);
			user_name = rs.getString(2);
			password = rs.getString(3);
			credit_card_number = rs.getString(4);
			mail_address = rs.getString(5);
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	//ゲッター
	public String getuser_id(){
		return this.user_id;
	}
	
	public String user_name(){
		return this.user_name;
	}
	
	public String getpassword(){
		return this.password;
	}
	
	public String getcredit_card_number(){
		return this.credit_card_number;
	}
	
	public String getmail_address(){
		return this.mail_address;
	}
}

