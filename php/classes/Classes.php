<?php

/**
 * @author Carlos Marquez <carl.marq95@gmail.com>
 * @version 0.0.1
 **/
class profile {
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
	 * @param $profileId
	 */
	public function setProfileId($profileId) : void {
		$this->profileId = $profileId;
	}

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
	public function setProfileEmail($profileEmail) : void {
		$this->profileEmail = $profileEmail;
	}
/**
 * @return mixed
 */
	public function getProfileHash() {
		return $this->profileHash;
}

/**
 * @param mixed $profileHash
 */
	public function setProfileHash($profileHash) {
		$this->profileHash = $profileHash;
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
	public function setProfileLocation($profileLocation) : void {
		$this->profileLocation = $profileLocation;
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
	public function setProfileUsername($profileUsername) : void {
		$this->profileUsername = $profileUsername;
	}

}