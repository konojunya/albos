package albos;

import java.io.IOException;
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
		String credit_card_number = "12345678987623";
		String card_company = "VISA";
		String card_date = "20161124155454";
		int security_code = 98765;
		
		String user_id = "00003";
		String user_name = "tarou";
		String password = "123456";
		String mail_address = "tarou@yahoo.co.jp";

		Albos_Dao Dao = new Albos_Dao();
		
		try {
			System.out.println(Dao.updateCredit(credit_card_number, card_company, card_date, security_code));
		} catch (SQLException e1) {
			System.out.println("updateCreditエラー");
			e1.printStackTrace();
		}
		
		try {
			System.out.println(Dao.updateUser(user_id, user_name, password, credit_card_number, mail_address));
		} catch (SQLException e) {
			System.out.println("updateUserエラー");
			e.printStackTrace();
		}
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}
