package albos;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Member_Registration
 */
@WebServlet("/Member_Registration")
public class Member_Registration extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * @see HttpServlet#HttpServlet()
     */
    public Member_Registration() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

		response.setContentType("text/plain;charset=UTF-8");  //print用
		PrintWriter out=response.getWriter();


		String user_id = "00001";
		String user_name = "gami";
		String password = "1234";
		String credit_card_number = "12345678912345";
		String mail_address = "gami@yahoo.co.jp";

		try {
			//クラスのLOAD
			Class.forName("com.mysql.jdbc.Driver");
		}
		catch (ClassNotFoundException e1) {
			e1.printStackTrace();
		}

		Connection con=null;

		try {
			//DB接続
			con=DriverManager.getConnection("jdbc:mysql://localhost/albos_system?user=root&useUnicode=true&characterEncoding=UTF-8");
		} catch (SQLException e) {
			e.printStackTrace();
		}



		String sql = "insert into user(user_id,user_name,password,credit_card_number,mail_address) values(?, ?, ?, ?, ?)";
		PreparedStatement psmt=null;
		try {
			psmt = con.prepareStatement(sql);

			psmt.setString(1,user_id);
			psmt.setString(2,user_name);
			psmt.setString(3,password);
			psmt.setString(4,credit_card_number);
			psmt.setString(5,mail_address);

		} catch (SQLException e) {
			e.printStackTrace();
			out.println("エラー");
		}

		try {
			psmt.executeUpdate();
		} catch (SQLException e) {
			e.printStackTrace();
			out.println("インサートエラー");
		}


	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}
