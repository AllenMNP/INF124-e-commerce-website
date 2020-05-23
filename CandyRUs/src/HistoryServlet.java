import java.io.IOException;
import java.io.PrintWriter;
import java.util.*;

import javax.servlet.*;
import javax.servlet.http.*;

public class HistoryServlet extends HttpServlet{

	List<String> recentList = new ArrayList<>();

	public void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException
	{
		HttpSession session = req.getSession();
         
        PrintWriter writer = res.getWriter();
        //writer.println("Session ID: " + session.getId());
        //writer.println("Creation Time: " + new Date(session.getCreationTime()));
        //writer.println("Last Accessed Time: " + new Date(session.getLastAccessedTime()));
        writer.println("Recently visited these:");
        synchronized(session) {
        	String newItem = req.getParameter("product");
        	System.out.println("New item added: " + newItem);
        	if(newItem != null && !recentList.contains(newItem)) {
            	recentList.add(newItem);
        	}
        	session.setAttribute("recentList", recentList);
        }
        if (session != null) {
        	List<String> recentItems = (List<String>)session.getAttribute("recentList");
        	if (recentItems != null)
        	{
        		if (recentItems.size() > 5)
        		{
        			recentItems.remove(0);
        		}
        		for (String item : recentItems) {
        			writer.println(item);
        		}
        	}
        	else {
        		writer.println("empty!");
        	}
        }
	}
}
