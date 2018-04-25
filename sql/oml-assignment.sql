/**
* inserts this Profile into mysql
*
*
 **/
INSERT INTO profile(profileId, profileEmail, profileFavorites, profileHash, profileLocation, profileUsername)
VALUES(UNHEX(REPLACE("aebdaeff-75ae-4039-b520-b506578efa3f", "dmscus@gmail.com", "Raspberry Kush", "564283", "Albuquerque, NM", "dmscus");

INSERT INTO profile(profileId, profileEmail, profileFavorites, profileHash, profileLocation, profileUsername)
VALUES(UNHEX(REPLACE("9fa0132a-f8a1-4377-9341-63e8ec033795", "sucsmd@gmail.com", "Trainwreck", "453256", "Tucson, AZ", "sucsmd");

DELETE FROM profileFavorites WHERE user = 'Ice Cream Cake'
DELETE FROM profileFavorites WHERE user = 'Strawberry Blonde'

UPDATE profile
SET profileFavorites = 'Reba'
WHERE profileEmail = 'dmscus@gmail.com'

UPDATE profile
SET profileLocation = 'Roswell, NM'
Where profileUsername = 'sucsmd'

<?php

public function insert (\PDO $pdo) : void {
		$query = "INSERT INTO profile(profileId, profileEmail, profileFavorites, profileHash, profileLocation, profileUsername) VALUES(:profileId, :profileEmail, :profileFavorites, :profileHash, :profileLocation, :profileUsername)";
		$statement = $pdo->prepare($query);
		$parameters = ["profileId" => $this->profileId->getBytes(), "profileEmail" => $this->profileEmail->getBytes(), "profileFavorites" => $this->profileFavorites->getBytes(), "profileHash" => $this->profileHash->getBytes(), "profileLocation" =>$this->profileLocation->getBytes(), "profileUsername" => $this->profileUsername->getBytes()];
		$statement->execute($parameters);
}
 public function delete (\PDO $pdo) : void {
 		$query = "DELETE FROM profile WHERE profileId = :profileId";
 		$statement = $pdo->prepare($query);
 		$parameters = ["profileId" => $this->profileId->getBytes()];
 		$statement->execute($parameters);
 }

public function update(\PDO $pdo) : void {
		$query = "UPDATE profile SET profileId = :profileId, profileEmail = :profileEmail, profleFavorites = :profileFavorites, profileHash = :profileHash, profileLocation = :profileLocation, WHERE profileUsername = :profileUsername";
		$statement = $pdo->prepare($query);

		$parameters = ["profileId" => $this->profileId->getBytes(), "profileEmail" => $this->profileEmail = :profileEmail->getBytes(), "profileFavorites" =>profileFavorites->getBytes(), "profileHash" => $this->profileHash-getBytes(), profileLocation => $this->profileLocation->getBytes()];
		$statement->execute($parameters);
		}
public static function getProfileByProfileId(\PDO $pdo, $profileId) : ?Profile {
try {
		profileId = self::ValidateUuid($profileId);
} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception){
		throw(new \PDOException($exception->getMessage(), 0, $exception));
}
$query = "SELECT profileId, profileEmail, profileFavorites, profileHash, profileLocation, profileUsername FROM profile WHERE profileId = :profileId";
$statement = $pdo->prepare->(query);

$parameters = ["profileId" => profileId->getBytes()];
$statement->execute($parameters);

try {
		$profile = null;
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		$row = $statement->fetch();
		if($row !== false) {
			$profile = new Profile($row["profileId"], $row["profileEmail"], $row["profileFavorites"], $row["profileLocation"]
}
?>