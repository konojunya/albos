package albos;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

public class Albos_Dao {

	public boolean updateCredit(String credit_card_number,String card_company,String card_date,int security_code)
			throws SQLException{

		//cast(? as date)でStringをdate型に変換してinsertする。
		String sql = "insert into credit_card(credit_card_number,card_company,card_date,security_code) values(?, ?, cast(? as date), ?)";
		Connection con = DBManager.getConnection();
		PreparedStatement psmt = con.prepareStatement(sql);
		psmt.setString(1,credit_card_number);
		psmt.setString(2,card_company);
		psmt.setString(3,card_date);
		psmt.setInt(4,security_code);

		int ret = psmt.executeUpdate();

		if(ret==1){
			return true;
		}
		else{
			return false;
		}
	}

	//------------------------------------------------------------------------------------------------------------------------

	public boolean updateUser(String user_id,String user_name,String password,String credit_card_number,String mail_address)
			throws SQLException{

		String sql = "insert into user(user_id,user_name,password,credit_card_number,mail_address) values(?, ?, ?, ?, ?)";
		Connection con = DBManager.getConnection();
		PreparedStatement psmt = con.prepareStatement(sql);
		psmt.setString(1,user_id);
		psmt.setString(2,user_name);
		psmt.setString(3,password);
		psmt.setString(4,credit_card_number);
		psmt.setString(5,mail_address);

		int ret = psmt.executeUpdate();

		if(ret==1){
			return true;
		}
		else{
			return false;
		}
	}
}
