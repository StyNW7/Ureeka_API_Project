# Ureeka API Project

## Introduction
As a member of Ureeka, I have a project to make an API and also make a documentation using Postman

## Library Management API Documentation
Welcome to the Library Management API documentation. This API provides endpoints to manage users and books within a library system.

### Endpoints

#### 1. Login
Description: Authenticate a user to obtain an access token.

Endpoint: POST /api/login

Usage: Use this request to log in with your registered credentials. On successful authentication, you'll receive an access token to access protected endpoints.

#### 2. Register
Description: Register a new user.

Endpoint: POST /api/register

Usage: Register a new user with a unique email address. Provide name, email, password, and password confirmation in the request body to create a new user account.

#### 3. Get User
Description: Retrieve user details.

Endpoint: GET /api/user

Usage: Fetch details of the currently authenticated user. Include the access token obtained from the login request in the Authorization header as a Bearer token.

#### 4. View Books
Description: Retrieve all books.

Endpoint: GET /api/books

Usage: Retrieve a list of all books available in the library. Requires authentication; include the access token in the Authorization header.

#### 5. Add Books
Description: Add a new book (Admin only).

Endpoint: POST /api/books

Usage: Add a new book to the library collection. Only accessible to users with admin privileges. Provide book details including title, ISBN, author, and year of publication in the request body.

#### 6. Update Books
Description: Update an existing book (Admin only).

Endpoint: PUT /api/books/{id}

Usage: Update details of an existing book identified by {id}. Only accessible to users with admin privileges. Provide updated book details in the request body.

#### 7. Delete Books
Description: Delete a book (Admin only).

Endpoint: DELETE /api/books/{id}

Usage: Delete a book from the library collection identified by {id}. Only accessible to users with admin privileges. No request body is required; just provide the book ID in the endpoint URL.

### Getting Started
#### Authentication:

Start by logging in with your credentials using the Login request. Copy the access token from the response.

Use the obtained token as a Bearer token in the Authorization header for subsequent requests.

#### Managing Books:

Use View Books to see all available books.

Add new books using Add Books, ensuring to provide all required details.

Update existing books with Update Books, specifying the book ID and updated information.

Delete unwanted books using Delete Books, supplying the book ID to remove from the collection.

#### User Management:

Retrieve user details with Get User to view your own profile information.

### Notes:
Ensure proper authentication for requests requiring admin privileges (Add Books, Update Books, Delete Books).

Validate request bodies to meet API requirements, such as unique email addresses for user registration and complete book details for Add Books and Update Books.

## Postman Documentation Link:
<a href="https://documenter.getpostman.com/view/35383957/2sA3XQh2MW">Postman Documentation Link</a>

## Made By
Name: Stanley Nathanael Wijaya
<br><br>
<code>Always strive for excellence ✨✨</code>
