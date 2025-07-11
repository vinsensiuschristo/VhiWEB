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
| Register             | POST       | `/api/register`              | User registration                |
| Login                | POST       | `/api/login`                 | User login                       |
| Get Current User     | GET        | `/api/user`                  | Retrieve authenticated user      |
| Create Vendor        | POST       | `/api/vendors`               | Register a vendor                |
| Create Product       | POST       | `/api/products`              | Add new product (by vendor)      |
| Get All Products     | GET        | `/api/products`              | Get list of products             |
| Get Product by ID    | GET        | `/api/products/{id}`         | Get product detail               |
| Update Product       | PUT/PATCH  | `/api/products/{id}`         | Update product                   |
| Delete Product       | DELETE     | `/api/products/{id}`         | Delete product                   |

---

## ✅ Authentication

All endpoints require the `Accept: application/json` header.  
Some endpoints require authentication with Bearer Token:

```
Authorization: Bearer {token}
```

---

## 📨 Request Payloads

### 🔐 Register
**POST** `/api/register`
```json
{
  "name": "vinsensius",
  "email": "vinsensius@gmail.com",
  "password": "secret123",
  "password_confirmation": "secret123"
}
```
- `name`: required, string, max 255
- `email`: required, valid email, unique
- `password`: required, min 8 characters, must match confirmation

---

### 🏢 Create Vendor
**POST** `/api/vendors`
```json
{
  "name": "Vendor A",
  "email": "vendor@example.com",
  "phone": "6281234567890",
  "address": "Jakarta, Indonesia",
  "website": "https://vendor-a.com"
}
```
- `name`: required
- `email`: required
- `phone`: required
- `address`: required
- `website`: required

---

### 📦 Create Product
**POST** `/api/products`
```json
{
  "name": "Product A",
  "description": "Example product",
  "price": 100.00,
  "vendor_id": 1
}
```
- `name`: required
- `description`: optional
- `price`: required, numeric
- `vendor_id`: required, must exist in vendors table

---

## 📄 Additional Notes

The answer to the *Problem-Solving and Algorithmic Thinking* task — specifically about importing large CSV data efficiently and reliably — is documented separately in:

- [`problemSolvingAndAlgoritmicThinking.txt`](./problemSolvingAndAlgoritmicThinking.txt)
- Or its PDF version: `problemSolvingAndAlgoritmicThinking.pdf`

Other scenario-based responses can be found in:  
- `scenarioBasedQuestion.txt` or `scenarioBasedQuestion.pdf`

---

## 📬 Contact

For questions or clarifications, feel free to reach out.