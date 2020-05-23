import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.ResultSet;
import java.sql.Statement;

@WebServlet("/ProductDetails")
public class ProductDetails extends HttpServlet {
	private static final long serialVersionUID = 1L;

    public ProductDetails() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		try {
			Class.forName("com.mysql.jdbc.Driver");
	        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306", "root", "");
	        Statement st = conn.createStatement();
	        
	        ResultSet rs = st.executeQuery("select * from candyrusDB.Candies where Name = 'Skittles'");
	        rs.next();
	        
	        PrintWriter out = response.getWriter();
			out.println("<!DOCTYPE html>");
	        out.println("<html>");
	        out.println("<head>");
	        out.println("<meta charset=\"UTF-8\">");   
	        out.println("<title> " + rs.getString("Name") + "</title>");  
	        out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"INF124-e-commerce-website/product.css\">");
	        out.println("<script src=\"product.js\"></script>");
	        out.println("</head>");
	       
	        out.println("<body>");
	        out.println("<ul class='nav'>");
	        out.println("</ul>");
			out.println("<h1>"+ rs.getString("Name") +"</h1>");
			out.println("<img onmouseover='bigImg(this)' onmouseout='normalImg(this)' src='" + rs.getString("Image1") + "'alt='skittlespic1'>");
			out.println("<img onmouseover='bigImg(this)' onmouseout='normalImg(this)' src='" + rs.getString("Image2") + "'alt='skittlespic2'>");
			out.println("<img onmouseover='bigImg(this)' onmouseout='normalImg(this)' src='" + rs.getString("Image3") + "'alt='skittlespic3'>");
			out.println("<h3>" + rs.getString("Price") + "</h3>");
			out.println("<h2>" + "Product Details" + "</h2>");
			out.println("<h4>" + rs.getString("Description2") + "</h4>");
			out.println("<h4>" + rs.getString("Description3") + "</h4>");
			out.println("<form class='addCart' action='AddToCart'>");
			//out.println("<input type='hidden' name='product' value='" + request.getParameter("product") + "'>");
			out.println("<input type='hidden' name='product' value='Skittles'>");
			out.println("<input class='button' type='submit' value='Add to Cart'>");
			out.println("</form>");
			out.println("</body>");
	        out.println("</html>");
	        
	        rs.close();
            st.close();
            conn.close();
		}
		catch (ClassNotFoundException e) {
			e.printStackTrace();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
