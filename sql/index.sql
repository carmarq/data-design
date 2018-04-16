ALTER DATABASE cmarquez69 CHARACTER SET utf8 COLLATE utf8_unicode_ci;
DROP TABLE IF EXISTS 'pick';
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS profile;
CREATE TABLE profile(
			profileId BINARY(16) NOT NULL,
			profileLocation VARCHAR(128)
			profileEmail VARCHAR(128)
			profileFavorites VARCHAR(128)
			profileUsername VARCHAR(16)
			UNIQUE(profileEmail),
			UNIQUE(profileUsername),
			PRIMARY KEY(profileId)
);
CREATE TABLE product(
			productId BINARY(16) NOT NULL,
			productName VARCHAR(128) NOT NULL,
			productVariety VARCHAR(128) NOT NULL,
			productFacts VARCHAR(128)  NOT NULL,
			productHistory VARCHAR(128) NOT NULL,
			productPrice VARCHAR(128) NOT NULL,
			productVariations VARCHAR(128) NOT NULL,
			INDEX(pickProductId),
			FOREIGN KEY(pickProfileId) REFERENCES profile(profileId)
			PRIMARY KEY(productID)
);
CREATE TABLE 'pick'(
			pickProductId BINARY(16)
			pickProfileId BINARY(16)
			INDEX(pickProfileId),
			INDEX(pickProductId),
			FOREIGN KEY(pickProductId) References product(productId),
			FOREIGN KEY(pickProfileId) REFERENCES profile(profileId),
			PRIMARY KEY(pickProfileId, pickProductId)
);