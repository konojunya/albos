package albos;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class UserLogin_Dao {
	
	public boolean exists(String user_id,String password)throws SQLException{
		
		
		String sql = "select * from user where user_id = ? AND password = ?";
		Connection con = DBManager.getConnection();
		PreparedStatement psmt = con.prepareStatement(sql);
		psmt.setString(1,user_id);
		psmt.setString(2,password);
		
		ResultSet result = psmt.executeQuery();
		
		if(result.next()){
			return true;
		}
		return false;
		
}

}
