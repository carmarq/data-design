<?php

namespace Edu\Cnm\cmarquez69\DataDesign;

require_once (dirname(_DIR_, 2). "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;
/**
 * @author Carlos Marquez <carl.marq95@gmail.com>
 * @version 0.0.1
 **/
class profile {
	use ValidateUuid;
	/**
 * id for this Profile; this is the primary key
 * @var $profileId
 **/
private $profileId;
	/**
	 *id for the Email associated with the profile
	 * @var $profileEmail
	 **/
private $profileEmail;
	/**
	 *id for the location of the profiles user
	 * @var $profileLocation
	 **/
private $profileLocation;
	/**
	 * id for protecting users password
	 * @var
	 */
private $profileHash;
	/**
	 *id for the username associated with the profile
	 *@var $profileUsername
	 **/
private $profileUsername;

}
	/**
	 * accessor method for profileId
	 *
	 * @return Uuid value for profileId
	 */
	public function getProfileId(): Uuid {
		return $this->profileId;
	}

	/**
	 * mutator method for profileId
	 *
	 * @param $newprofileId
	 */
	public function setProfileId($newprofileId) : void {
		try {
			$uuid = self::validateUuid($newprofileId);
		}	catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}
	// convert and store the profile id
	$this->profileId = $uuid;
	
	/**
	 * accessor method for profileEmail
	 *
	 * @return String value of profileEmail
	 */
	public function getProfileEmail(): String {
		return $this->profileEmail;
	}
	/**
	 * mutator method for profileEmail
	 *
	 * @param $profileEmail
	 */
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
 * accessor method for  profilehash
 *
 * @return string value of profilehash
 */
	public function getProfileHash(): string {
		return $this->profileHash;
}
/**
 * Mutator method for profilehash
 *
 * @param $profileHash
 */
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
	 * accessor method for profileLocation
	 *
	 * @return String value of
	 */
	public function getProfileLocation(): String {
		return $this->profileLocation;
	}

	/**
	 * mutator method of profileLocation
	 *
	 * @param $profileLocation
	 */
	public function setProfileLocation(string $newProfileLocation) : void {
		$newProfileLocation = trim($newProfileLocation);
		$newProfileLocation = filter_var($newProfileLocation, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProfileLocation) === true) {
			throw(new \InvalidArgumentException("profile location is empty or insecure"))
		}
		if(strlen ($newProfileLocation) > 128 ){
			throw(new \RangeException("profile location is too large"));
		}
		$this->profileLocation = $newProfileLocation;
	}
	/**
	 * accessor method of profileUsername
	 *
	 * @return string value of profileUsername
	 */
	public function getProfileUsername(): String {
		return $this->profileUsername;
	}
	/**
	 * mutator method of profileUsername
	 *
	 * @param $profileUsername
	 */
	public function setProfileUsername(string $newProfileUsername) : void {
}

}