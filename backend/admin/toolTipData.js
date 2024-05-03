var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// users table
users_addTip=["",spacer+"This option allows all members of the group to add records to the 'Users' table. A member who adds a record to the table becomes the 'owner' of that record."];

users_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Users' table."];
users_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Users' table."];
users_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Users' table."];
users_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Users' table."];

users_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Users' table."];
users_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Users' table."];
users_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Users' table."];
users_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Users' table, regardless of their owner."];

users_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Users' table."];
users_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Users' table."];
users_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Users' table."];
users_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Users' table."];

// deposits table
deposits_addTip=["",spacer+"This option allows all members of the group to add records to the 'Deposits' table. A member who adds a record to the table becomes the 'owner' of that record."];

deposits_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Deposits' table."];
deposits_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Deposits' table."];
deposits_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Deposits' table."];
deposits_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Deposits' table."];

deposits_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Deposits' table."];
deposits_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Deposits' table."];
deposits_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Deposits' table."];
deposits_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Deposits' table, regardless of their owner."];

deposits_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Deposits' table."];
deposits_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Deposits' table."];
deposits_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Deposits' table."];
deposits_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Deposits' table."];

// withdrawals table
withdrawals_addTip=["",spacer+"This option allows all members of the group to add records to the 'Withdrawals' table. A member who adds a record to the table becomes the 'owner' of that record."];

withdrawals_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Withdrawals' table."];
withdrawals_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Withdrawals' table."];
withdrawals_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Withdrawals' table."];
withdrawals_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Withdrawals' table."];

withdrawals_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Withdrawals' table."];
withdrawals_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Withdrawals' table."];
withdrawals_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Withdrawals' table."];
withdrawals_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Withdrawals' table, regardless of their owner."];

withdrawals_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Withdrawals' table."];
withdrawals_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Withdrawals' table."];
withdrawals_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Withdrawals' table."];
withdrawals_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Withdrawals' table."];

// wallets table
wallets_addTip=["",spacer+"This option allows all members of the group to add records to the 'Wallets' table. A member who adds a record to the table becomes the 'owner' of that record."];

wallets_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Wallets' table."];
wallets_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Wallets' table."];
wallets_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Wallets' table."];
wallets_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Wallets' table."];

wallets_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Wallets' table."];
wallets_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Wallets' table."];
wallets_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Wallets' table."];
wallets_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Wallets' table, regardless of their owner."];

wallets_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Wallets' table."];
wallets_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Wallets' table."];
wallets_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Wallets' table."];
wallets_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Wallets' table."];

// companies table
companies_addTip=["",spacer+"This option allows all members of the group to add records to the 'Companies' table. A member who adds a record to the table becomes the 'owner' of that record."];

companies_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Companies' table."];
companies_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Companies' table."];
companies_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Companies' table."];
companies_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Companies' table."];

companies_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Companies' table."];
companies_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Companies' table."];
companies_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Companies' table."];
companies_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Companies' table, regardless of their owner."];

companies_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Companies' table."];
companies_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Companies' table."];
companies_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Companies' table."];
companies_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Companies' table."];

// investments table
investments_addTip=["",spacer+"This option allows all members of the group to add records to the 'Investments' table. A member who adds a record to the table becomes the 'owner' of that record."];

investments_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Investments' table."];
investments_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Investments' table."];
investments_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Investments' table."];
investments_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Investments' table."];

investments_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Investments' table."];
investments_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Investments' table."];
investments_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Investments' table."];
investments_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Investments' table, regardless of their owner."];

investments_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Investments' table."];
investments_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Investments' table."];
investments_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Investments' table."];
investments_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Investments' table."];

// affiliates table
affiliates_addTip=["",spacer+"This option allows all members of the group to add records to the 'Affiliates' table. A member who adds a record to the table becomes the 'owner' of that record."];

affiliates_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Affiliates' table."];
affiliates_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Affiliates' table."];
affiliates_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Affiliates' table."];
affiliates_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Affiliates' table."];

affiliates_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Affiliates' table."];
affiliates_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Affiliates' table."];
affiliates_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Affiliates' table."];
affiliates_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Affiliates' table, regardless of their owner."];

affiliates_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Affiliates' table."];
affiliates_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Affiliates' table."];
affiliates_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Affiliates' table."];
affiliates_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Affiliates' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
