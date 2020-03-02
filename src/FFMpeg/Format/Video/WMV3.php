<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Format\Video;

/**
 * The WMV video format
 */
class WMV3 extends DefaultVideo
{
    public function __construct($audioCodec = 'wmav3', $videoCodec = 'wmv3', $fileFormat = 'asf')
    {
        $this
            ->setAudioCodec($audioCodec)
            ->setVideoCodec($videoCodec)
            ->setFileFormat($fileFormat);
    }

    /**
     * {@inheritDoc}
     */
    public function supportBFrames()
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function getExtraParams()
    {
        return array(
            '-f', $this->fileFormat // force file format
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('wmav3');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableVideoCodecs()
    {
        return array('wmv3');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableFileFormats()
    {
        return array('asf');
    }
}
