import java.io.*;
import java.net.*;

public class TCPServer {
    public static void main(String[] args) {
        try (ServerSocket serverSocket = new ServerSocket(12345)) {
            System.out.println("Server listening on port 12345...");
            try (Socket clientSocket = serverSocket.accept();
                 BufferedReader in = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
                 PrintWriter out = new PrintWriter(clientSocket.getOutputStream(), true)) {

                String clientMessage = in.readLine();
                System.out.println("Client: " + clientMessage);
                out.println("Hello, Client!");
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
