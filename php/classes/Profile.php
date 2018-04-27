<?php

	namespace Edu\Cnm\cmarquez69\DataDesign;
	require_once("autoload.php");
	require_once (dirname(__DIR__, 2)) . "/classes/autoload.php");

	use Ramsey\Uuid\Uuid;
	/**
 	*@author Carlos Marquez <carl.marq95@gmail.com>
 	*@version 0.0.1
 	**/

	class Profile implements \JsonSerializable {
		use ValidateUuid;
		/**
 		*id for this Profile; this is the primary key
 		*@var $profileId
 		**/
		private $profileId;
		/**
		*id for the Email associated with the profile
	 	*@var string $profileEmail
	 	**/
		private $profileEmail;
		/**
	 	*id for protecting users password
	 	*@var string $profileHash
	 	**/
		private $profileHash;
		/**
	 	*id for the location of the profiles user
	 	*@var $profileLocation
	 	**/
		private $profileLocation;
		/**
	 	*id for the username associated with the profile
	 	*@var string $profileUsername
	 	**/
		private $profileUsername;


		/**
 		*@param $newProfileId
 		*@param string $newProfileEmail
 		*@param $newProfileHash
 		*@param string $newProfileLocation
 		*@param string $newProfileUsername
 		**/
		public function __construct($newProfileId, string $newProfileEmail, $newProfileHash, string $newProfileLocation, string $newProfileUsername){
			try {
				$this->setProfileId($newProfileId);
				$this->setProfileEmail($newProfileEmail);
				$this->setProfileHash($newProfileHash);
				$this->setProfileLocation($newProfileLocation);
				$this->setProfileUsername($newProfileUsername);
	}
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}
}
		/**
	 	*accessor method for profileId
	 	*@return Uuid value for profileId
	 	**/
		public function getProfileId(): Uuid {
			return $this->profileId;
	}
		/**
	 	*mutator method for profileId
	 	*@param $newprofileId
	 	**/
		public function setProfileId($newprofileId) : Uuid {
			try {
			$uuid = self::validateUuid($newprofileId);
		}
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}
		//convert and store the profile id
		$this->profileId = $uuid;

		/**
		*accessor method for profileEmail
		*@return String value of profileEmail
		**/
		public function getProfileEmail(): String {
			return $this->profileEmail;
	}
		/**
		*mutator method for profileEmail
	 	*@param $profileEmail
		**/
		public function setProfileEmail(string $newProfileEmail) : void {
			$newProfileEmail = trim($newProfileEmail);
			$newProfileEmail = filter_var($newProfileEmail, FILTER_VALIDATE_EMAIL);
				if(empty($newProfileEmail) === true) {
				throw(new \InvalidArgumentException("profile email is too large"));
		}
			if(strlen($newProfileEmail) > 128) {
			throw(new \RangeException("profile email is too large")
		}
			$this->profileEmail = $newProfileEmail;
	}
		/**
 		*accessor method for  profilehash
 		*@return string value of profilehash
 		**/
		public function getProfileHash(): string {
			return $this->profileHash;
}
		/**
 		*Mutator method for profilehash
 		*@param $profileHash
 		**/
		public function setProfileHash(string $newProfileHash) : void {
			$newProfileHash = trim($newProfileHash);
			$newProfileHash = strtolower($newProfileHash);
			if(empty($newProfileHash) === true) {
				throw(new \InvalidArgumentException("profile password hash empty or insecure"));
		}
			if(!ctype_xdigit($newProfileHash)) {
				throw(new \InvalidArgumentException("profile password hash empty or insecure"));
		}
			if strlen($newProfileHash) !== 128) {
				throw(new \RangeException("profile hash must be 128 characters"));
		}
			$this->profileHash = $newProfileHash;
}
		/**
	 	*accessor method for profileLocation
	 	*@return String value of
	 	**/
		public function getProfileLocation(): String {
			return $this->profileLocation;
	}

		/**
	 	*mutator method of profileLocation
	 	*@param $profileLocation
	 	**/
		public function setProfileLocation(string $newProfileLocation) : void {
			$newProfileLocation = trim($newProfileLocation);
			$newProfileLocation = filter_var($newProfileLocation, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProfileLocation) === true) {
			throw(new \InvalidArgumentException("profile location is empty or insecure"));
		}
		if(strlen ($newProfileLocation) > 128 ){
			throw(new \RangeException("profile location is too large"));
		}
			$this->profileLocation = $newProfileLocation;
	}
		/**
	 	*accessor method of profileUsername
	 	*@return string value of profileUsername
	 	**/
		public function getProfileUsername(): String {
			return $this->profileUsername;
	}
		/**
	 	*mutator method of profileUsername
	 	*@param $profileUsername
	 	**/
		public function setProfileUsername(string $newProfileUsername) : void {
			$newProfileUsername = trim($newProfileUsername);
			$newProfileUsername = filter_var($newProfileUsername,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newProfileUsername) === true) {
				throw(new \InvalidArgumentException("username is empty or insecure"));
			}
			//verify that username is within is within range of 32
			if(strlen($newProfileUsername) > 32) {
				throw(new\RangeException("username is too large"));
			}
			//store the username
			$this->profileUsername = $newProfileUsername;
}
}
		/**
 		*@param \PDO $pdo
 		**/
		public function insert (\PDO $pdo) : void {

			$query = "INSERT INTO profile(profileId, profileEmail, profileFavorites, profileHash, profileLocation, profileUsername) VALUES(:profileId, :profileEmail, :profileFavorites, :profileHash, :profileLocation, :profileUsername)";
			$statement = $pdo->prepare($query);

			$parameters = ["profileId" => $this->profileId->getBytes(), "profileEmail" => $this->profileEmail, "profileFavorites" => $this->profileFavorites, "profileHash" => $this->profileHash, "profileLocation" =>$this->profileLocation, "profileUsername" => $this->profileUsername];
			$statement->execute($parameters);
}
		/**
	 	*@param \PDO $pdo
 		**/
 		public function delete (\PDO $pdo) : void {

			$query = "DELETE FROM profile WHERE profileId = :profileId";
			$statement = $pdo->prepare($query);

			$parameters = ["profileId" => $this->profileId->getBytes()];
			$statement->execute($parameters);
}
		/**
 		*@param \PDO $pdo
 		**/
		public function update(\PDO $pdo) : void {

 			$query = "UPDATE profile SET profileId = :profileId, profileEmail = :profileEmail, profileFavorites = :profileFavorites, profileHash = :profileHash, profileLocation = :profileLocation, WHERE profileUsername = :profileUsername";
			$statement = $pdo->prepare($query);

			$parameters = ["profileId" => $this->profileId->getBytes(), "profileEmail" => $this->profileEmail = :profileEmail(), "profileFavorites" => $this->profileFavorites(), "profileHash" => $this->profileHash(), profileLocation => $this->profileLocation()];
			$statement->execute($parameters);
	}
		/**
 		*@param \PDO $pdo
 		*@param $profileId
 		*@return \SplFixedArray
 		**/
		public static function getProfileByProfileId(\PDO $pdo, $profileId) : \SplFixedArray {

 		try {
			$profileId = self::validateUuid($profileId);
	} 	catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			throw(new \PDOException($exception->getMessage(), 0, $exception));
	}

			$query = "SELECT profileId, profileEmail, profileFavorites, profileHash, profileLocation, profileUsername FROM profile WHERE profileId = :profileId";
			$statement = $pdo->prepare->(query);

			$parameters = ["profileId" => $profileId->getBytes()];
			$statement->execute($parameters);

			$profile = new \SplFixedArray($statement->rowCount());
			$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {

		try {
			$profile = new Profile($row["profileId"], $row["profileEmail"], $row["profileFavorites"], $row["profileHash"], $row["profileLocation"], $row["profileUsername"]);
			$profiles[$profiles->key()] = $profile;
			$profiles->next();

	} 	catch(\Exception $exception) {

		throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
		return ($profiles);
}
		/**
		*@return array that serializes profileId
		**/
		public function jsonSerialize() array {
			$fields = get_object_vars($this);

			$fields["profileId"] = $this->profileId->toString();

		return($fields);
}