package albos;

import java.sql.ResultSet;
import java.sql.SQLException;

public class Credit_cardBean {
	
	private String credit_card_number;
	private String card_company;
	private String card_date;
	private int security_code;
	
	Credit_cardBean(ResultSet rs){
		
		
		try {
			credit_card_number = rs.getString(1);
			card_company = rs.getString(2);
			card_date = rs.getString(3);
			security_code = rs.getInt(4);
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	//ゲッター
	public String getcredit_card_number(){
		return this.credit_card_number;
	}
	
	public String getcard_company(){
		return this.card_company;
	}
	
	public String getcard_date(){
		return this.card_date;
	}
	
	public int getsecurity_code(){
		return this.security_code;
	}
}
