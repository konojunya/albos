package albos;

public class ErrorCheck {
	
	public boolean E_check(String credit_card_number,String card_company,String card_date,int security_code,String user_id,
			String user_name,String password,String mail_address){
		
		//数値を文字列に変換
		String Intsecurity_code = String.valueOf(security_code);
		
		if(credit_card_number.equals("")){
			return false;
		}
		if(card_company.equals("")){
			return false;
		}
		if(card_date.equals("")){
			return false;
		}
		if(Intsecurity_code.equals("")){
			return false;
		}
		if(user_id.equals("")){
			return false;
		}
		if(user_name.equals("")){
			return false;
		}
		if(password.equals("")){
			return false;
		}
		if(mail_address.equals("")){
			return false;
		}
		return true;
	}
	
	public boolean mail_check(String mail_address){
		
		final String MATCH_MAIL ="[\\w\\.\\-]+@(?:[\\w\\-]+\\.)+[\\w\\-]+";
		
		if(mail_address.matches(MATCH_MAIL)){
			return true;
		}
		else{
			return false;
		}
	}
}
