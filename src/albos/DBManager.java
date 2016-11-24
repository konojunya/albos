package albos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;


public class DBManager {
	
	private static String drivername = "com.mysql.jdbc.Driver";
	private static String url = "jdbc:mysql://localhost/albos_system";
	private static String user = "root";
	private static String pass = "";

	
	public static Connection getConnection(){
		Connection con = null;
	
		try {
			Class.forName(drivername);
			con = DriverManager.getConnection(url,user,pass);
		} 
		catch (ClassNotFoundException e) {
			e.printStackTrace();
			System.out.println("DBManagerエラー");
		}
		catch (SQLException e){
			e.printStackTrace();
			System.out.println("DBManagerエラー");
		}
		return con;
	}
}
