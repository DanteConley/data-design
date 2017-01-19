<?php
namespace Edu\Cnm\Dconley6\DataDesign;

require_once("Profile.php");

/**
 * A small view of ownership of audio on SoundCloud
 *
 * This will be an example of what SoundCloud stores when you update your profile information
 *
 * @author Dante Conley <danteconley@icloud.com>
 * @version 1.0
 **/
class Profile implements \JsonSerializable {
	use ValidateDate;
	/**
	 * id for this Profile; this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;
	/**
	 * User name of the profile
	 * @var int $profileUser
	 **/
	private $profileUser;
	/**
	 * Location of where the profile user lives
	 * @var int $profileLocation
	 **/
	private $profileLocation;
	/**
	 * Contact information for the profile
	 * @var $profileContact
	 **/
	private $profileContact;
	/**
	 * Information about the user of the profile
	 * @var $profileBio
	 **/
	private $profileBio;


}