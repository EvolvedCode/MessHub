from tkinter import *
import tkinter.messagebox as tm
import os
#import pymysql

class LoginFrame(Frame):
    def __init__(self, master):
        super().__init__(master)

        self.label_1 = Label(self, text="Username")
        self.label_2 = Label(self, text="Password")
        self.label_3 = Label(self, text="Quantity")
        self.label_p = Label(self, text="Welcome to MessHub", justify="center", font="Sans", bg="Coral", bd=2)

        self.entry_1 = Entry(self)
        self.entry_2 = Entry(self, show="•")
        self.entry_3 = Entry(self)

        self.label_p.grid(row=0, column=0, ipady=50)
        self.label_p.grid(columnspan=2)
        
        self.label_1.grid(row=1, sticky=E)
        self.label_2.grid(row=2, sticky=E)
        self.label_3.grid(row=3, sticky=E);
        self.entry_1.grid(row=1, column=1, ipady=10)
        self.entry_2.grid(row=2, column=1, ipady=10)
        self.entry_3.grid(row=3, column=1, ipady=10, pady=100);

        self.logbtn = Button(self, text="Dispense", command = self._login_btn_clickked, width =20)
        self.logbtn.grid(columnspan=5, ipady=20, pady=50)

        self.pack()

    def _login_btn_clickked(self):
        #print("Clicked")
        username = self.entry_1.get()
        password = self.entry_2.get()
        quantity = str(self.entry_3.get())
        quantity = str("sudo ./dispense "+quantity)
        print(quantity)

        if username == "10529125":
            tm.showinfo("Login info", "Welcome Din!\nDispensing your meals.")
            os.system(quantity)
        elif username == "16345957":
            tm.showinfo("Login info", "Welcome Jin!\nDispensing your meals.")
            os.system(quantity)
        elif username == "44125":
            tm.showinfo("Login info", "Welcome Ken!\nDispensing your meals.")
            os.system(quantity)
        elif username == "125124":
            tm.showinfo("Login info", "Welcome Rukia!\nDispensing your meals.")
            os.system(quantity)
        elif username == "26462":
            tm.showinfo("Login info", "Welcome Ichigo!\nDispensing your meals.")
            os.system(quantity)
        elif username == "4236432":
            tm.showinfo("Login info", "Welcome Raz!\nDispensing your meals.")
            os.system(quantity)
        else:
            tm.showerror("Login error", "Incorrect username/password!")

        self.entry_1.delete(0,'end')
        self.entry_2.delete(0,'end')
        self.entry_3.delete(0,'end')

root = Tk()
root.attributes('-fullscreen', True)
lf = LoginFrame(root)
root.mainloop()
