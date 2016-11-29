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
		
		String credit_card_number = request.getParameter("credit_card_number");
		String card_company = request.getParameter("card_company");
		String card_date = request.getParameter("card_date");
		String Stringsecurity_code = request.getParameter("security_code");
		String user_id = request.getParameter("user_id");
		String user_name = request.getParameter("user_name");
		String password = request.getParameter("password");
		String mail_address = request.getParameter("mail_address");
		
		int security_code=0;
		//エラー回避
		if (!Stringsecurity_code.equals("")){
			security_code =Integer.parseInt(Stringsecurity_code);
		}

		Albos_Dao Dao = new Albos_Dao();
		ErrorCheck check = new ErrorCheck();
		
		if(check.E_check(credit_card_number, card_company, card_date, security_code, user_id, user_name, password, mail_address)==true){
			
			//Database処理
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
		else{
			System.out.println("入力ミス");
		}
		
		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}