# E-Procurement API System

This repository contains the source code for a basic version of an **E-Procurement API System** built with Laravel. It includes core features such as:

- ✅ User Authentication (Register & Login)
- ✅ Vendor Registration
- ✅ Product Catalog CRUD based on vendor ownership

---

## 📁 Project Structure

### Key Features & Endpoints

| Feature              | Method     | Endpoint                     | Description                      |
|----------------------|------------|------------------------------|----------------------------------|
| Register             | POST       | `/api/register`             | User registration                |
| Login                | POST       | `/api/login`                | User login                       |
| Get Current User     | GET        | `/api/user`                 | Retrieve authenticated user      |
| Create Vendor        | POST       | `/api/vendors`              | Register a vendor                |
| Create Product       | POST       | `/api/products`             | Add new product (by vendor)      |
| Get All Products     | GET        | `/api/products`             | Get list of products             |
| Get Product by ID    | GET        | `/api/products/{id}`        | Get product detail               |
| Update Product       | PUT/PATCH  | `/api/products/{id}`        | Update product                   |
| Delete Product       | DELETE     | `/api/products/{id}`        | Delete product                   |

---

## ✅ Authentication

All endpoints require the `Accept: application/json` header.  
Some endpoints require authentication with Bearer Token (`Authorization: Bearer {token}`).

---

## 📄 Additional Notes

The answer to the *Problem-Solving and Algorithmic Thinking* task — specifically about importing large CSV data efficiently and reliably — is documented separately in: problemSolvingAndAlgoritmicThinking.txt or problemSolvingAndAlgoritmicThinking.pdf

