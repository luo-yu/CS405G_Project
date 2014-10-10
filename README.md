CS405G_Project
==============

This is a database course project

<strong>Team member: Miles, Yu</strong>

The project description: 

CS405G Fall 2014 Project
Assigned:        Oct 10th
Due:                Dec 1st            
 
 
<h4>Objectives</h4>
The aim of this project is to implement an e-commerce database application. You are responsible for client-side web applications and setting up the server-side database. Let’s assume that you have been hired to set up an online gift store. The company sells two types of products: toys and games. (You are welcome to take on other applications of interest. A one-on-one meeting between me and your team is needed in order to discuss your chosen application)
 
<h4>Software Requirements</h4>
 
Your goal is to create an online store for the gift store. There will be three types of users:
<ul>
<li>customers</li>
<li>staff</li>
<li>manager</li>
</ul>
Customers They are allowed to query items in the stores at all times. But in order to purchase from the store, customers must first register. The items are first placed in a shopping basket, and then ordered. Customers can see the status of orders (i.e., pending or shipped) as part of the shopping history.
Staff can check inventory, re-stock the online store with more items, view all customer orders, and ship orders to customers. A staff member has an on-line ID and a password that he/she can use to login into the company’s website to perform the previous listed tasks
Manager can do all tasks a staff member can do. In addition, manager can (1) view statistics about sale information (in the previous week, month, or year), and (2) decide sales promotions. Manager needs to login into the company’s website to perform the tasks.
 
Your project must include the following functionality:
 
<h5>Customer Forms</h5>
Register Allows a new customer to register with the store.
Shopping Allows a registered customer to view items and add items into a shopping basket.
Purchase Allows a registered customer to view their shopping basket and click "Purchase". This creates an order for the items that can then be viewed (and filled) by the store staff. 
Orders Allows a registered customer to view the orders they have placed and see the status (either Pending or Shipped).
 
<h5>Staff Forms</h5>
Login Screen Staff must login in order to perform these functions. A single login for all staff is fine.
View Inventory See a list of all items and their quantities.
Update Inventory Same as above, but with editable text boxes to change the quantity of any component.
Ship Pending Orders View the list of pending orders (components, price, customer info).
The staff member can click a "Ship It" button and, if all the components are available, the status of the order changes from "Pending" to "Shipped" and the quantities in the inventory are decreased. If the components are not available, some error page listing the missing components is generated and the order remains "Pending".
 
<h5>Manager Forms</h5>
Login Screen may use the staff login form
View Inventory, Update Inventory, Ship Pending Orders: the same as those of staff
Sales Statistics View the list of all items and sales history in the previous (week, month, or year)
Sales Promotion View the list of all items and decide the promotion rate.
 
 
<h5>Bonus Option 1:</h5>
 
(15 points) Add VIP customers. A VIP customer is the customer that has the privilege to open a mini-store of his/her own. He/she can list items for sale in the mini-store and can cancel them at any time before the items are sold. The sale can be in the format of regular sale and bidding.  If the item is for regular sale, registered customers can purchase it. If the item is for bidding, customers can bid on the item and bidding history should be kept for each item in the database. When the bidding finishes, customer offering the highest price wins the item. The item will be shipped to the winning customer by the original seller.
 
Write down your assumptions or constraints and draw a complete ER diagram including the VIP customers.
(5 points) Implement the function of regular sale for the VIP customers with SQL programs.
(10 points) Implement the function of bidding for the VIP customers with SQL programs.
 
<h5>Bonus Option 2:</h5>
           
A product recommendation system that utilizes the customer’s browsing and purchasing history to recommend relevant items during the browsing process.
 
 
