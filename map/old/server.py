from http.server import HTTPServer, SimpleHTTPRequestHandler
 
PORT = 1234
server_address = ('localhost', PORT)
 
Handler = SimpleHTTPRequestHandler
 
httpd = HTTPServer(server_address, Handler)
 
print("servidor en puerto", PORT)
httpd.serve_forever()
