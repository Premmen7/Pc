<?php

class Account{
	
	private $id;
	
	public $firstname;
	public $lastname;
	public $email;
	public $password;
	public $postalcode;
	public $admin;
	public $username;
	public $restricted;
	public $imagelink;
	
	public function __construct($idd, $firstnamee, $lastnamee, $emaill, $passwordd, $postalcodee, $adminn, $usernamee, $restrictedd, $imagelinkk){
		
        $this->id = $idd;
		
        $this->firstname = $firstnamee;
		$this->lastname = $lastnamee;
		$this->email = $emaill;
		$this->password = $passwordd;
		
		$this->postalcode = $postalcodee;
		$this->admin = $adminn;
		$this->username = $usernamee;
		$this->restricted = $restrictedd;
		$this->imagelink = $imagelinkk;
		//echo $this->firstname.'<br/>';
    }
	
	public function getId()	{ return $this->id; }
	
	public function getFirstname()	{ return $this->firstname; }
	public function getLastname()	{ return $this->lastname; }
	public function getEmail()	{ return $this->email; }
	public function getPassword()	{ return $this->password; }
	
	public function getPostalcode()	{ return $this->postalcode; }
	public function getAdmin()	{ return $this->admin; }
	public function getUsername()	{ return $this->username; }
	public function getRestricted()	{ return $this->restricted; }
	public function getImagelink()	{ return $this->imagelink; }
	
	
	public function setFirstname($par)	{ $this->firstname = $par; }
	public function setLastname($par)	{ $this->lastname = $par; }
	public function setEmail($par)	{ $this->email = $par; }
	public function setPassword($par)	{ $this->password = $par; }
	
	public function setPostalcode($par)	{ $this->postalcode = $par; }
	public function setAdmin($par)	{ $this->admin = $par; }
	public function setUsername($par)	{ $this->username = $par; }
	public function setRestricted($par)	{ $this->restricted = $par; }
	public function setImagelink($par)	{ $this->imagelink = $par; }
	
	
	
	
}

class CustomBuild	{
	
	private $id;
	
	public $accountId;
	public $buildName;
	public $buildCreationTime;
	public $buildOrderedTime;
	public $buildOrdered;
	public $buildFeatured;
	public $buildComment;
	
	public function __construct($idd, $accountIdd, $buildNamee, $buildCreationTimee, $buildOrderedTimee, $buildOrderedd, $buildFeaturedd, $buildCommentt)	{
		
		$this->id = $idd;
		$this->accountId = $accountIdd;
		$this->buildName = $buildNamee;
		$this->buildCreationTime = $buildCreationTimee;
		$this->buildOrderedTime = $buildOrderedTimee;
		$this->buildOrdered = $buildOrderedd;
		$this->buildFeatured = $buildFeaturedd;
		$this->buildComment = $buildCommentt;
	}
	
	public function getId()	{ return $this->id; }
	
	public function getAccountId()	{ return $this->accountId; }
	public function getBuildName()	{ return $this->buildName; }
	public function getBuildCreationTime()	{ return $this->buildCreationTime; }
	public function getBuildOrderedTime()	{ return $this->buildOrderedTime; }
	public function getBuildOrdered()	{ return $this->buildOrdered; }
	public function getBuildFeatured()	{ return $this->buildFeatured; }
	public function getBuildComment()	{ return $this->buildComment; }
	
	
	public function setAccountId($par)	{ $this->accountId = $par; }
	public function setBuildName($par)	{ $this->buildName = $par; }
	public function setBuildCreationTime($par)	{ $this->buildCreationTime = $par; }
	public function setBuildOrderedTime($par)	{ $this->buildOrderedTime = $par; }
	public function setBuildOrdered($par)	{ $this->buildOrdered = $par; }
	public function setBuildFeatured($par)	{ $this->buildFeatured = $par; }
	public function setBuildComment($par)	{ $this->buildComment = $par; }
	
	
}

class OrderedItem	{
	
	private $id;
	
	public $customBuildId;
	public $pcPartId;
	
	public function __construct($idd, $customBuildIdd, $pcPartIdd)	{
		
		$this->id = $idd;
		$this->customBuildId = $customBuildIdd;
		$this->pcPartId = $pcPartIdd;
	}
	
	public function getId()	{ return $this->id; }
	
	public function getCustomBuildId()	{ return $this->customBuildId; }
	public function getPcPartId()	{ return $this->pcPartId; }
	
	
	public function setCustomBuildId($par)	{ $this->customBuildId = $par; }
	public function setPcPartId($par)	{ $this->pcPartId = $par; }
}

class PCPart	{

	private $id;
	
	public $pcPartName;
	public $pcPartImageLink;
	public $pcPartDescription;
	public $pcPartPrice;
	public $pcPartInventory;
	public $pcPartType;
	public $pcPartWattage;
	public $pcPartCompatibility;
	public $pcPartOrderedTimes;
	
	public function __construct($idd, $pcPartNamee, $pcPartImageLinkk, $pcPartDescriptionn, $pcPartPricee, $pcPartInventoryy, $pcPartTypee, $pcPartWattagee, $pcPartCompatibilityy, $pcPartOrderedTimess)	
	{
		
		$this->id = $idd;
		
		$this->pcPartName = $pcPartNamee;
		$this->pcPartImageLink = $pcPartImageLinkk;
		$this->pcPartDescription = $pcPartDescriptionn;
		$this->pcPartPrice = $pcPartPricee;
		$this->pcPartInventory = $pcPartInventoryy;
		$this->pcPartType = $pcPartTypee;
		$this->pcPartWattage = $pcPartWattagee;
		$this->pcPartCompatibility = $pcPartCompatibilityy;
		$this->pcPartOrderedTimes = $pcPartOrderedTimess;
	}
	
	public function getId()	{ return $this->id; }
	
	public function getPcPartName()	{ return $this->pcPartName; }
	public function getPcPartImageLink()	{ return $this->pcPartImageLink; }
	public function getPcPartDescription()	{ return $this->pcPartDescription; }
	public function getPcPartPrice()	{ return $this->pcPartPrice; }
	public function getPcPartInventory()	{ return $this->pcPartInventory; }
	public function getPcPartType()	{ return $this->pcPartType; }
	public function getPcPartWattage()	{ return $this->pcPartWattage; }
	public function getPcPartCompatibility()	{ return $this->pcPartCompatibility; }
	public function getPcPartOrderedTimes()	{ return $this->pcPartOrderedTimes; }
	
	
	public function setPcPartName($par)	{ $this->pcPartName = $par; }
	public function setPcPartImageLink($par)	{ $this->pcPartImageLink = $par; }
	public function setPcPartDescription($par)	{ $this->pcPartDescription = $par; }
	public function setPcPartPrice($par)	{ $this->pcPartPrice = $par; }
	public function setPcPartInventory($par)	{ $this->pcPartInventory = $par; }
	public function setPcPartType($par)	{ $this->pcPartType = $par; }
	public function setPcPartWattage($par)	{ $this->pcPartWattage = $par; }
	public function setPcPartCompatibility($par)	{ $this->pcPartCompatibility = $par; }
	public function setPcPartOrderedTimes($par)	{ $this->pcPartOrderedTimes = $par; }
	
	public function incrementOrderedTimes()	{ $this->pcPartOrderedTimes += 1; }
}

class Review	{
	
	private $id;
	
	public $accountId;
	public $reviewContent;
	public $reviewScore;
	
	public function __construct($idd, $accountIdd, $reviewContentt, $reviewScoree)	{
		
		$this->id = $idd;
		
		$this->accountId = $accountIdd;
		$this->reviewContent = $reviewContentt;
		$this->reviewScore = $reviewScoree;
	}
	
	public function getId()	{ return $this->id; }
	
	public function getAccountId()	{ return $this->accountId; }
	public function getReviewContent()	{ return $this->reviewContent; }
	public function getReviewScore()	{ return $this->reviewScore; }
	
	
	public function setAccountId($par)	{ $this->accountId = $par; }
	public function setReviewContent($par)	{ $this->reviewContent = $par; }
	public function setReviewScore($par)	{ $this->reviewScore = $par; }
}

class Asset	{
	
	private $id;
	
	private $title;
	private $text1;
	private $text2;
	private $imageLink;
	private $assetType;
	private $enabled;
	
	public function __construct($idd, $titlee, $text11, $text22, $imageLinkk, $typee, $enabledd)	{
		
		$this->id = $idd;
		$this->title = $titlee;
		$this->text1 = $text11;
		$this->text2 = $text22;
		$this->imageLink = $imageLinkk;
		$this->type = $typee;
		$this->enabled = $enabledd;
	}
	
	public function getId()	{ return $this->id; }
	
	public function getTitle()	{ return $this->title; }
	public function getText1()	{ return $this->text1; }
	public function getText2()	{ return $this->text2; }
	public function getImageLink()	{ return $this->imageLink; }
	public function getAssetType()	{ return $this->assetType; }
	public function getEnabled()	{ return $this->enabled; }
	
	
	public function setTitle($par)	{ $this->title = $par; }
	public function setText1($par)	{ $this->text1 = $par; }
	public function setText2($par)	{ $this->text2 = $par; }
	public function setImageLink($par)	{ $this->imageLink = $par; }
	public function setAssetType($par)	{ $this->assetType = $par; }
	public function setEnabled($par)	{ $this->enabled = $par; }
}

class Controller	{
	
	private $servername = "localhost";
    private $username = "root";
    private $password ="";
    private $database ="buyyourpcdb";
    public $con;

    
    public function __construct()	{
		
		$this->initiateDbConnection();
	}
	
	// Create connection string (Database connection)
	public function initiateDbConnection()	{
		
		$this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if(mysqli_connect_error())
        {
            trigger_error("Not possible to connect to MySQL: ".mysqli_connect_error());
        }
        else
        {
            return $this->con;
        }
		
	}
	
	/* Select Operations */
	public function getAccountFromEmail($inputEmail)	{
		
		$query = "SELECT * FROM Accounts WHERE accountEmail = '$inputEmail'";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			
			$account = null;
            while($row = $result->fetch_assoc()){
				
				$account = new Account($row['accountId'], $row['accountFirstname'], $row['accountLastname'], $row['accountEmail'], $row['accountPassword'], $row['accountPostalCode'], $row['accountAdmin'], $row['accountUsername'], $row['accountRestricted'], $row['accountProfileImageLink']);
            }
			
            return $account;
        }
		
        else{
			
            return null;
        }
	}
	public function getAccount($accountId)	{
		
		$query = "SELECT * FROM Accounts WHERE accountId = $accountId";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			
			$account = null;
            while($row = $result->fetch_assoc()){
				
				$account = new Account($row['accountId'], $row['accountFirstname'], $row['accountLastname'], $row['accountEmail'], $row['accountPassword'], $row['accountPostalCode'], $row['accountAdmin'], $row['accountUsername'], $row['accountRestricted'], $row['accountProfileImageLink']);
            }
			
            return $account;
        }
		
        else{
			
            return null;
        }
	}
	public function getBuildFromId($buildId)	{
		
		$query = "SELECT * FROM customBuilds WHERE customBuildId = $buildId";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			
			$customBuild = null;
            while($row = $result->fetch_assoc()){
				
				$customBuild = new CustomBuild($row['customBuildId'], $row['accountId'], $row['buildName'], $row['buildCreationTime'], $row['buildOrderedTime'], $row['buildOrdered'], $row['buildFeatured'], $row['buildComment']);
            }
			
            return $customBuild;
        }
		
        else{
			
            return null;
        }
	}
	
	public function getPCPartsBySearch($inputSearch)	{
		
		$query = "SELECT * FROM PCParts WHERE pcPartName LIKE '%"."$inputSearch"."%' OR pcPartDescription LIKE '%"."$inputSearch"."%'";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			
			$pcParts = Array();
            while($row = $result->fetch_assoc()){
				
				$pcPart = new PCPart($row['pcPartId'], $row['pcPartName'], $row['pcPartImageLink'], $row['pcPartDescription'], $row['pcPartPrice'], $row['pcPartInventory'], $row['pcPartType'], $row['pcPartWattage'], $row['pcPartCompatibility'], $row['pcPartOrderedTimes']);
				
				$pcParts[] = $pcPart;
            }
			
            return $pcParts;
        }
		
        else{
			
            return null;
        }
	}
	public function getPCPartsByCompatibilityAndType($compatibilityInt, $partType)	{
		
		$query = "SELECT * FROM PCParts WHERE pcPartCompatibility = $compatibilityInt AND pcPartType = $partType";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			
			$pcParts = Array();
            while($row = $result->fetch_assoc()){
				
				$pcPart = new PCPart($row['pcPartId'], $row['pcPartName'], $row['pcPartImageLink'], $row['pcPartDescription'], $row['pcPartPrice'], $row['pcPartInventory'], $row['pcPartType'], $row['pcPartWattage'], $row['pcPartCompatibility'], $row['pcPartOrderedTimes']);
				
				$pcParts[] = $pcPart;
            }
			
            return $pcParts;
        }
		
        else{
			
            return null;
        }
	}
	public function getReviews()	{
		$query = "SELECT * FROM Reviews";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			
			$reviews = Array();
            while($row = $result->fetch_assoc()){
				
				$review = new Review($row['reviewId'], $row['accountId'], $row['reviewContent'], $row['reviewScore']);
				
				$reviews[] = $review;
            }
			
            return $reviews;
        }
		
        else{
			
            return Array();
        }
	}
	public function AdminGetPCPartsByOrdered()	{
		
		$query = "SELECT * FROM PCParts ORDER BY pcPartOrderedTimes";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			
			$pcParts = Array();
            while($row = $result->fetch_assoc()){
				
				$pcPart = new PCPart($row['pcPartId'], $row['pcPartName'], $row['pcPartImageLink'], $row['pcPartDescription'], $row['pcPartPrice'], $row['pcPartInventory'], $row['pcPartType'], $row['pcPartWattage'], $row['pcPartCompatibility'], $row['pcPartOrderedTimes']);
				
				$pcParts[] = $pcPart;
            }
			
            return $pcParts;
        }
		
        else{
			
            return null;
        }
	}
	public function getPCPartById($pcPartId)	{
		
		$query = "SELECT * FROM PCParts WHERE pcPartId = $pcPartId";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			
			$pcPart = null;
            while($row = $result->fetch_assoc()){
				
				$pcPart = new PCPart($row['pcPartId'], $row['pcPartName'], $row['pcPartImageLink'], $row['pcPartDescription'], $row['pcPartPrice'], $row['pcPartInventory'], $row['pcPartType'], $row['pcPartWattage'], $row['pcPartCompatibility'], $row['pcPartOrderedTimes']);
				
            }
			
            return $pcPart;
        }
		
        else{
			
            return null;
        }
	}
	public function getOrderedItemsByCustomBuildId($buildId)	{
		
		$query = "SELECT * FROM orderedItems WHERE customBuildId = $buildId";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
			$orderedItems = array();
            while($row = $result->fetch_assoc()){
				$orderedItem = new OrderedItem($row['orderedItemId'], $row['customBuildId'], $row['pcPartId']);
				$orderedItems[] = $orderedItem;
            }
			
			return $orderedItems;
        }
        else{
            return null;
        }
	}
	public function getPCPartsByCustomBuildId($buildId)	{
		
		$orderedItems = $this->getOrderedItemsByCustomBuildId($buildId);
		$pcParts = Array();
		
		foreach($orderedItems as $orderedItem)	{
			
			$pcParts[] = $this->getPCPartById($orderedItem->pcPartId);
		}
		
		return $pcParts;
	}
	public function getAssets()	{
		
		$query = "SELECT * FROM Assets";
        $asset = $this->con->query($query);
        if($asset->num_rows > 0){
			
			$assets = Array();
            while($row = $asset->fetch_assoc()){
				
				$asset = new Asset($row['assetId'], $row['title'], $row['text1'], $row['text2'], $row['imageLink'], $row['type'], $row['enabled']);
				
				$assets[] = $asset;
            }
			
            return $assets;
        }
		
        else{
			
            return null;
        }
	}
	public function getAssetsByType($type)	{
		
		$query = "SELECT * FROM Assets WHERE type = '".$type."' AND enabled = 1";
        $asset = $this->con->query($query);
        if($asset->num_rows > 0){
			
			$assets = Array();
            while($row = $asset->fetch_assoc()){
				
				$asset = new Asset($row['assetId'], $row['title'], $row['text1'], $row['text2'], $row['imageLink'], $row['type'], $row['enabled']);
				
				$assets[] = $asset;
            }
			
            return $assets;
        }
		
        else{
			
            return Array();
        }
	}
	
	/* Insert Operations */
	
	public function InsertAccount($accountObj)	{
		
		$firstname = $this->con->real_escape_string($accountObj->firstname);
		$lastname = $this->con->real_escape_string($accountObj->lastname);
		$email = $this->con->real_escape_string($accountObj->email);
		$password = $this->con->real_escape_string($accountObj->password);
		$postalcode = $this->con->real_escape_string($accountObj->postalcode);
		$admin = $this->con->real_escape_string($accountObj->admin);
		$username = $this->con->real_escape_string($accountObj->username);
		$restricted = $this->con->real_escape_string($accountObj->restricted);
		$imagelink = $this->con->real_escape_string($accountObj->imagelink);
		
		$query = "INSERT INTO accounts (accountEmail, accountUsername, accountFirstname, accountLastname, accountPassword, accountPostalCode, accountAdmin, accountRestricted, accountProfileImageLink) VALUES ('$email', '$username', '$firstname', '$lastname', '$password', '$postalcode', $admin, $restricted, '$imagelink')";
		
		$sql = $this->con->query($query);
		if($sql == true){
            
			return true;
        }
        else{
            return false;
        }
	}
	public function insertReview($reviewObj)	{
		
		$accountId = $this->con->real_escape_string($reviewObj->accountId);
		$reviewContent = $this->con->real_escape_string($reviewObj->reviewContent);
		$reviewScore = $this->con->real_escape_string($reviewObj->reviewScore);
		
		$query = "INSERT INTO reviews (accountId, reviewContent, reviewScore) VALUES ($accountId, '$reviewContent', $reviewScore)";
		$sql = $this->con->query($query);
		
		if($sql == true){
            
			return true;
        }
        else{
			echo "Failed to connect to MySQL: " .  mysqli_error($this->con);
            return false;
        }
	}
	public function insertCustomBuildByTemplate($accountObj, $customBuildTemplateObj)	{
		
		$accountId = $this->con->real_escape_string($accountObj->accountId);
		$buildName = $this->con->real_escape_string('copy of '.$customBuildTemplateObj->buildName);
		
		$query1 = "INSERT INTO customBuilds (accountId, buildName, buildCreationTime, buildOrdered, buildFeatured, buildComment) VALUES ($accountId, '$buildName', GETDATE(), 0, 0, '')";
		$sql = $this->con->query($query1);
		
		
		
		if($sql == true){
			
			$query2 = "SELECT MAX(customBuildId) FROM customBuilds";
			$buildId = $this->con->query($query2);
			if($buildId->num_rows > 0){
				$orderedItemsTemplate = getOrderedItemsByCustomBuildId($customBuildTemplateObj->id);
		
				foreach($orderedItemsTemplate as $orderedItemObj)	{
			
					$query3 = "INSERT INTO orderedItems (customBuildId, pcPartId) VALUES ($buildId, ".$orderedItemObj->pcPartId.")";
					$sql1 = $this->con->query($query3);
				}
				
				return true;
			}
        }
        else	{
			
            return false;
        }
		
		
	}
	public function AdminInsertPcPart($PCPartObj)	{
		
		$pcPartName = $this->con->real_escape_string($PCPartObj->pcPartName);
		$pcPartImageLink = $this->con->real_escape_string($PCPartObj->pcPartImageLink);
		$pcPartDescription = $this->con->real_escape_string($PCPartObj->pcPartDescription);
		$pcPartPrice = $this->con->real_escape_string($PCPartObj->pcPartPrice);
		$pcPartInventory = $this->con->real_escape_string($PCPartObj->pcPartInventory);
		$pcPartType = $this->con->real_escape_string($PCPartObj->pcPartType);
		$pcPartWattage = $this->con->real_escape_string($PCPartObj->pcPartWattage);
		$pcPartCompatibility = $this->con->real_escape_string($PCPartObj->pcPartCompatibility);
		$pcPartOrderedTimes = $this->con->real_escape_string($PCPartObj->pcPartOrderedTimes);
		
		$query = "INSERT INTO PCParts (pcPartName, pcPartImageLink, pcPartDescription, pcPartPrice, pcPartInventory, pcPartType, pcPartWattage, pcPartCompatibility, pcPartOrderedTimes) VALUES ('$pcPartName', '$pcPartImageLink', '$pcPartDescription', $pcPartPrice, $pcPartInventory, $pcPartType, $pcPartWattage, $pcPartCompatibility, $pcPartOrderedTimes)";
		$sql = $this->con->query($query);
		
		if($sql == true){
            
			return true;
        }
		
        else{
            return false;
        }
	}
	public function insertOrderedItems($PCPartObj, $customBuildObj)	{
		
		$customBuildId = $this->con->real_escape_string($customBuildObj->id);
		$pcPartId = $this->con->real_escape_string('copy of '.$PCPartObj->id);
		
		$query = "INSERT INTO orderedItems (customBuildId, pcPartId) VALUES ($customBuildId, $pcPartId)";
		$sql = $this->con->query($query);
		
		if($sql == true){
            
			return true;
        }
		
        else{
			
            return false;
        }
	}
	public function insertCustomBuild($accountObj)	{
		
		$accountId = $this->con->real_escape_string($accountObj->accountId);
		$buildName = $this->con->real_escape_string('Untitled');
		
		$query = "INSERT INTO customBuilds (accountId, buildName, buildCreationTime, buildOrdered, buildFeatured, buildComment) VALUES ($accountId, '$buildName', GETDATE(), 0, 0, '')";
		$sql = $this->con->query($query);
		
		if($sql == true){
			
			return true;
		}
		
		else	{
			
			return false;
		}
	}
	public function insertAsset($assetObj)	{
		
		$title = $this->con->real_escape_string($assetObj->getTitle());
		$text1 = $this->con->real_escape_string($assetObj->getText1());
		$text2 = $this->con->real_escape_string($assetObj->getText2());
		$imageLink = $this->con->real_escape_string($assetObj->getImageLink());
		$type = $this->con->real_escape_string($assetObj->getAssetType());
		$enabled = $this->con->real_escape_string($assetObj->getEnabled());
		
		$query = "INSERT INTO Assets (title, text1, text2, imageLink, type, enabled) VALUES ($title, $text1, $text2, $imageLink, $type, $enabled)";
		$sql = $this->con->query($query);
		if($sql == true){
            
			return true;
        }
        else{
            return false;
        }
	}
	
	/* Update Operations */
	
	public function updateAccount($accountObj)	{
		
		$id = $this->con->real_escape_string($accountObj->getId());
		
		$firstname = $this->con->real_escape_string($accountObj->firstname);
		$lastname = $this->con->real_escape_string($accountObj->lastname);
		$email = $this->con->real_escape_string($accountObj->email);
		$password = $this->con->real_escape_string($accountObj->password);
		$postalcode = $this->con->real_escape_string($accountObj->postalcode);
		$admin = $this->con->real_escape_string($accountObj->admin);
		$username = $this->con->real_escape_string($accountObj->username);
		$restricted = $this->con->real_escape_string($accountObj->restricted);
		$imagelink = $this->con->real_escape_string($accountObj->imagelink);
		
		$query = "UPDATE accounts SET accountEmail = '$email', accountUsername = '$username', accountFirstname = '$firstname', accountLastname = '$lastname', accountPassword = '$password', accountPostalCode = '$postalcode', accountAdmin = $admin, accountRestricted = $restricted, accountProfileImageLink = '$imagelink' WHERE accountId = $id";
		
		$sql = $this->con->query($query);
		if($sql == true)	{
            
			return true;
        }
        else	{
			
            return false;
        }
	}
	public function updateCustomBuild($updatedCustomBuildObj)	{
		
		$id = $this->con->real_escape_string($updatedCustomBuildObj->getId());
		
		$accountId = $this->con->real_escape_string($updatedCustomBuildObj->accountId);
		$buildName = $this->con->real_escape_string($updatedCustomBuildObj->buildName);
		$buildOrdered = $this->con->real_escape_string($updatedCustomBuildObj->buildOrdered);
		$buildFeatured = $this->con->real_escape_string($updatedCustomBuildObj->buildFeatured);
		$buildComment = $this->con->real_escape_string($updatedCustomBuildObj->buildComment);
		
		$query = "UPDATE customBuilds SET accountId = $accountId, buildName = '$buildName', buildOrdered = $buildOrdered, buildFeatured = $buildFeatured, buildComment = $buildComment WHERE customBuildId = $id";
		$sql = $this->con->query($query);
		
		if($sql == true){
			
			return true;
		}
		
		else	{
			
			return false;
		}
	}
	public function updatePcPart($UpdatedPCPart)	{
		
		$id = $this->con->real_escape_string($UpdatedPCPart->getId());
		
		$pcPartName = $this->con->real_escape_string($UpdatedPCPart->pcPartName);
		$pcPartImageLink = $this->con->real_escape_string($UpdatedPCPart->pcPartImageLink);
		$pcPartDescription = $this->con->real_escape_string($UpdatedPCPart->pcPartDescription);
		$pcPartPrice = $this->con->real_escape_string($UpdatedPCPart->pcPartPrice);
		$pcPartInventory = $this->con->real_escape_string($UpdatedPCPart->pcPartInventory);
		$pcPartType = $this->con->real_escape_string($UpdatedPCPart->pcPartType);
		$pcPartWattage = $this->con->real_escape_string($UpdatedPCPart->pcPartWattage);
		$pcPartCompatibility = $this->con->real_escape_string($UpdatedPCPart->pcPartCompatibility);
		$pcPartOrderedTimes = $this->con->real_escape_string($UpdatedPCPart->pcPartOrderedTimes);
		
		$query = "UPDATE PCParts SET pcPartName = '$pcPartName', pcPartImageLink = '$pcPartImageLink', pcPartDescription = '$pcPartDescription', pcPartPrice = $pcPartPrice, pcPartInventory = $pcPartInventory, pcPartType = $pcPartType, pcPartWattage = $pcPartWattage, pcPartCompatibility = $pcPartCompatibility, pcPartOrderedTimes = $pcPartOrderedTimes WHERE pcPartId = $id";
		$sql = $this->con->query($query);
		
		if($sql == true){
            
			return true;
        }
		
        else{
			
            return false;
        }
	}
	public function updateAsset($assetObj)	{
		
		$id = $this->con->real_escape_string($assetObj->getId());
		
		$title = $this->con->real_escape_string($assetObj->getTitle());
		$text1 = $this->con->real_escape_string($assetObj->getText1());
		$text2 = $this->con->real_escape_string($assetObj->getText2());
		$imageLink = $this->con->real_escape_string($assetObj->getImageLink());
		$type = $this->con->real_escape_string($assetObj->getAssetType());
		$enabled = $this->con->real_escape_string($assetObj->getEnabled());
		
		$query = "UPDATE Assets SET title = $title, text1 = $text1, text2 = $text2, imageLink = $imageLink, type = $type, enabled = $enabled WHERE assetId = $id";
		$sql = $this->con->query($query);
		if($sql == true){
            
			return true;
        }
        else{
            return false;
        }
	}
	
	/* Delete Operations */
	
	public function AdminDeletePcPart($PCPartId)	{
		
		$query = "DELETE FROM PCParts WHERE pcPartId = $PCPartId";
		$sql = $this->con->query($query);
		
		if($sql == true)	{
            
			return true;
        }
        else	{
			
            return false;
        }
	}
	public function deleteCustomBuild($customBuildId)	{
		
		$query = "DELETE FROM customBuilds WHERE customBuildId = $customBuildId";
		$sql = $this->con->query($query);
		
		if($sql == true)	{
            
			$query1 = "DELETE FROM orderedItems WHERE customBuildId = $customBuildId";
			$sql1 = $this->con->query($query1);
			return true;
        }
        else	{
			
            return false;
        }
	}
	public function deleteOrderedItem($orderedItemId)	{
		
		$query = "DELETE FROM orderedItems WHERE orderedItemId = $orderedItemId";
		$sql = $this->con->query($query);
		
		if($sql == true)	{
            
			return true;
        }
        else	{
			
            return false;
        }
	}
	public function deleteAccount($accountId)	{
		
		$query = "DELETE FROM accounts WHERE accountId = $accountId";
		$sql = $this->con->query($query);
		
		if($sql == true)	{
            
			return true;
        }
        else	{
			
            return false;
        }
	}
	public function deleteAsset($assetId)	{
		
		$query = "DELETE FROM assets WHERE assetId = $assetId";
		$sql = $this->con->query($query);
		
		if($sql == true)	{
            
			return true;
        }
        else	{
			
            return false;
        }
	}
	
	/* Other */
	
	public function validateAccountPassword($accountEmail, $inputPassword)	{
		
		$accountObj = $this->getAccountFromEmail($accountEmail);
		
		if(!is_null($accountObj))	{
			
			if($accountObj->password == $inputPassword)	{
			
				return true;
			}
			
			else	{
				
				return false;
			}
		}
		
		else	{
			
			return false;
		}
	}
	public function getBuildWattage($customBuildObj)	{
		
		$orderedItems = $this->getOrderedItemsByCustomBuildId($customBuildObj->id);
		
		$wattageTotal = 0;
		
		foreach($orderedItems as $orderedItem)	{
			
			$wattageTotal += $this->getPCPartById($orderedItem->pcPartId)->pcPartWattage;
		}
		
		return $wattageTotal;
	}
	public function orderBuild($customBuildObj)	{
		
		$customBuildObj->setBuildOrdered(1);
		
		if($this->updateCustomBuild($customBuildObj) == true)	{
			
			$pcPartsOrdered = $this->getPCPartsByCustomBuildId($customBuildObj->id);
			
			foreach($pcPartsOrdered as $pcPart)	{
				
				$pcPart->incrementOrderedTimes();
				
				$this->updatePcPart($pcPart);
			}
			
			return true;
		}
		
		else	{ 
		
			return false; 
		}
	}
	public function getBuildPrice($buildId)	{
		
		$labourCosts = 150;
		$totalPrice = $labourCosts;
		$pcParts = $this->getPCPartsByCustomBuildId($buildId);
		
		foreach($pcParts as $pcPart)	{
			
			$totalPrice += $pcPart->pcPartPrice;
		}
		
		return $totalPrice;
	}
	public function AdminFeatureBuild($customBuildObj)	{
		
		$customBuildObj->setBuildFeatured(1);
		
		return $this->updateCustomBuild($updatedCustomBuildObj);
		
	}
	public function customQuery($query)	{
		$sql = $this->con->query($query);
		if($sql == true)	{
            
			return true;
        }
        else	{
			
            return false;
        }
	}
	
	
	public function accountSignInCheck($accountEmail, $accountPassword)	{
		
		if($this->validateAccountPassword($accountEmail, $accountPassword))	{
			
			setcookie("email", $accountEmail, time() + (86400 * 30), "/");
			setcookie("password", $accountPassword, time() + (86400 * 30), "/");
			
			return true;
			
		}
		
		else	{
			
			return false;
		}
	}
	public function accountSignOut()	{
		
		setcookie("email", "", time() - 3600, "/");
		setcookie("password", "", time() - 3600, "/");
		
		header('Refresh:0');
	}
	public function accountAuthenticateAuto()	{
		
		if(isset($_COOKIE["email"])) {
			
			if($this->validateAccountPassword($_COOKIE["email"], $_COOKIE["password"]))	{
				
				return $this->getAccountFromEmail($_COOKIE["email"]);
			}
			
			else	{
				
				return null;
			}
		}
		
		else	{
			
			return null;
		}
	}
	
	public function accountSignUp($accountObj)	{
		
		if($this->InsertAccount($accountObj))	{
			if($this->accountSignInCheck($accountObj->getEmail(), $accountObj->getPassword()))	{
				header('Location: Home.php');
				return true;
			}
			
			echo "keivje";
			return false;
		}
		
		else	{
			echo "geager";
			return false;
		}
		
	}
}

?>

