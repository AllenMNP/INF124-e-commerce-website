import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;
import java.util.ArrayList;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

@WebServlet("/AddToCart")
public class AddToCart extends HttpServlet {
	private static final long serialVersionUID = 1L;
   
    public AddToCart() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		List<String> cart = new ArrayList<>();
		String candy = request.getParameter("product");
		HttpSession session = request.getSession();
		PrintWriter out = response.getWriter();
		
		if (session.isNew()) {
			cart.add(candy);
		}
		else {
			cart = (List<String>)session.getAttribute("cart");
			if (candy != null) {
				cart.add(candy);
			}
		}
		session.setAttribute("cart",  cart);
		
		if (cart.size() > 0) {
			out.println("Items in your cart: ");
			for (String item : cart) {
				out.println(item);
			}
		}
		else {
			out.println("Your cart is empty!");
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
