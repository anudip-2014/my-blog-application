
# My Blog Application
This project is a simple blog application built using Laravel. It features user roles such as Admin, Author, and User, with role-based access control implemented to manage different functionalities such as creating, editing, and deleting posts.

## Approach
### 1. Role-Based Access Control (RBAC) Implementation:
I created a middleware to handle role-based access control, ensuring that different users have access to different parts of the application based on their role. For example, only admins can manage users, and only authors can create, edit, and delete posts.
I modified the registration process to allow for different roles. Users can choose to register as a regular user or an author, and admins have the ability to assign roles during user creation.

### 2. Admin Panel:
I set up an admin panel where administrators can manage users and blog posts. This was done using Bootstrap templates for consistency in design.
The dashboard for the admin panel is accessible only by admin users and includes sections for managing users and posts.

### 3. User Registration and Authentication:
The registration process was customized to include role selection. Depending on the selected role, the user is given the appropriate permissions.
Upon login, users are redirected based on their role. Admins are redirected to the admin dashboard, while regular users and authors are redirected to the home page.

### 4. Post Management:
Authors can create, edit, and delete their posts. The functionality is secured with middleware to ensure only authors can access these features.
Posts are displayed on the homepage for all users to view, but only authors can manage them.

### 5. Testing:
The application was tested to ensure proper role assignments and access controls. Each feature, such as post creation, editing, and deletion, was tested under different user roles.
Special attention was given to ensuring that unauthorized users cannot access admin-only areas or author-only functionalities.

## Challenges Faced

### 1. Role-Based Access:
Implementing dynamic role selection during registration posed a challenge in ensuring that the correct options were displayed based on the user’s context (e.g., registering as an author or user). This was addressed by creating separate registration routes for different roles.

### 2. Middleware Management:
Managing and testing middleware to ensure that only authorized users could access certain routes required thorough testing and adjustments.

### 3. Admin and User Redirection:
Ensuring that users were redirected to the appropriate pages based on their role upon login required overriding the default Laravel redirection behavior. This was handled by customizing the LoginController.

## GitHub Repository
The full source code for this project can be found at the following GitHub repository:

[https://github.com/anudip-2014/my-blog-application](https://github.com/anudip-2014/my-blog-application)



