<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<%
out.println("マイページ");
String UserLogin = null;

Cookie cookies[] = request.getCookies();

if(cookies!=null)
{
	for(int i=0;i<cookies.length;i++)
	{
		if(cookies[i].getName().equals("UserLogin"))
		{
			UserLogin = cookies[i].getValue();
		}
	}
}


if(UserLogin != null){
	out.println("ログイン中");
}
%>
</body>
</html>